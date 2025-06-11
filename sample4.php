<?php
$servername="localhost";
$username="root";
$password="";
$database_name="rit_fleet";

$conn=mysqli_connect($servername, $username, $password, $database_name);
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}
if(isset($_POST['save'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];

    $sql_query="INSERT INTO register(email,password, confirmpassword) VALUES('$email','$password', '$confirm_password')";
    if(mysqli_query($conn, $sql_query)){
        echo "New Details entry inserted successfully";
    }
    else{
        echo "Error: ".$sql."".mysqli_error($conn);
    }
    mysqli_close($conn);

}
?>
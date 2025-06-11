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
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['newpassword'];
    $confirmpassword=$_POST['confirmpassword'];

    $sql_query="INSERT INTO register(name,email,password, confirmpassword) VALUES('$name','$email','$password', '$confirmpassword')";
    if(mysqli_query($conn, $sql_query)){
        echo "New Details entry inserted successfully";
    }
    else{
        echo "Error: ".$sql."".mysqli_error($conn);
    }
    mysqli_close($conn);

}

?>
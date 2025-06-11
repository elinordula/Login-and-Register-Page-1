<?php
// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'rit_fleet';

// Create a connection to the database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the login form has been submitted
if (isset($_POST['login'])) {
    // Get the email and password from the form
    $email = $_POST['login-username'];
    $password = $_POST['login-password'];

    // Query the database to check if the email and password match
    $query = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($query);

    // Check if a user was found
    if ($result->num_rows > 0) {
        // Login successful, redirect to a protected page
        header('Location: connect.php');
        exit;
    } else {
        // Login failed, display an error message
        echo 'Invalid email or password';
    }
}

// Close the database connection
$conn->close();
?>
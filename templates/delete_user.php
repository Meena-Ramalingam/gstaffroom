<?php
// Connect to the database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'your_database_name';

$conn = mysqli_connect($host, $user, $password, $dbname);

// Get the ID of the user to be deleted
$id = $_GET['id'];

// Delete the user from the database
$sql = "DELETE FROM users WHERE id=$id";
mysqli_query($conn, $sql);

// Close the database connection
mysqli_close($conn);

// Redirect back to the admin page
header('Location: admindelete.php');
?>

<?php
// Check if the form has been submitted
if(isset($_POST['submit'])){
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "staff";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the insert statement
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];
    $sql = "INSERT INTO users (username,password,user_type) VALUES ('$username', '$password', '$user_type')";

    // Execute the insert statement
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<style>
    body {
	font-family: Arial, sans-serif;
}

h1 {
	text-align: center;
}

h2 {
	margin-top: 30px;
}

form {
	border: 1px solid #ccc;
	padding: 10px;
	width: 50%;
	margin: auto;
}

label {
	display: block;
	margin-bottom: 5px;
}

input[type="text"],
input[type="password"],
input[type="email"] {
	padding: 5px;
	width: 100%;
	margin-bottom: 10px;
}

input[type="submit"] {
	background-color: #4CAF50;
	color: #fff;
	border: none;
	padding: 10px 20px;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #3e8e41;
}

table {
	border-collapse: collapse;
	width: 80%;
	margin: auto;
}

th, td {
	padding: 10px;
	text-align: left;
	border-bottom: 1px solid #ddd;
}

th {
	background-color: #4CAF50;
	color: #fff;
}
</style>

<body>
    <h1>Add User</h1>
    <form method="post">
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br>
        <label>User type:</label><br>
        <input type="text" name="user_type" required><br>

       
        <input type="submit" name="submit" value="Add User">
    </form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Admin Page</h1>
	<table>
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>User Type</th>
			<th>Delete</th>
		</tr>
		<?php
			// Connect to the database
			$conn = new mysqli("localhost", "root", "", "my_database");

			// Check for errors
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			// Prepare and execute the SQL statement to select all users
			$sql = "SELECT username, password, user_type FROM users";
			$result = $conn->query($sql);

            if (isset($_POST['delete']) && isset($_POST['user_id'])) {
                // Get the user ID and sanitize it
                $user_id = $conn->real_escape_string($_POST['user_id']);
        
                // Prepare and execute the SQL statement to delete the user
                $sql = "DELETE FROM users WHERE id = '$user_id'";
                if ($conn->query($sql) === TRUE) {
                    echo "User deleted successfully.";
                } else {
                    echo "Error deleting user: " . $conn->error;
                }
            }

			// Check if any users were found
			if ($result->num_rows > 0) {
				// Display each user in a table row
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row['username'] . "</td>";
					echo "<td>" . $row['password'] . "</td>";
					echo "<td>" . $row['user_type'] . "</td>";
					echo "<td><button>Delete</button></td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan=\"4\">No users found.</td></tr>";
			}

			// Close the database connection
			$conn->close();
		?>
	</table>
</body>
</html>

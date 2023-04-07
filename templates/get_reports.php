<?php
// get the report data from the database or email
// ...
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "staffroom49";

$conn = new mysqli($servername, $username, $password, $dbname);

// check if the connection was successful
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// retrieve the data from the weekly_reports table
$sql = "SELECT * FROM weekly_reports";
$result = $conn->query($sql);

// for demonstration purposes, create a dummy report

// display the report in a table row
echo "<tr>";
echo "<td>" . $report["username"] . "</td>";
echo "<td>" . $report["subject_name"] . "</td>";
echo "<td>" . $report["class_name"] . "</td>";
echo "<td>" . $report["class_hours"] . "</td>";
echo "<td>" . $report["topics_covered"] . "</td>";
echo "<td>" . $report["description"] . "</td>";
echo "<td>" . $report["time_of_submission"] . "</td>";
echo "</tr>";
?>

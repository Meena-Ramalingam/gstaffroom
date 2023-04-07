<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$subject_name = $_POST["subject_name"];
	$class_name = $_POST["class_name"];
	$class_hours = $_POST["class_hours"];
	$topics_covered = $_POST["topics_covered"];
	$description = $_POST["description"];

	// save the report data to a database or send it in an email
	// ...

	echo "Report submitted successfully.";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Weekly Report</title>
	
</head>
<style>
body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
}

header {
	background-color: #333;
	color: #fff;
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 10px;
}

header h1 {
	margin: 0;
}

main {
	margin: 20px auto;
	width: 80%;
}

form {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
}

label {
	flex-basis: 100%;
	margin-bottom: 10px;
	font-weight: bold;
}

input[type="text"],
input[type="number"],
textarea {
	flex-basis: 100%;
	padding: 10px;
	border: 1px solid #ccc;
	border-radius: 5px;
	margin-bottom: 20px;
}

input[type="submit"] {
	background-color: #4CAF50;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #388E3C;
}
</style>

<body>
	<header>
		<h1>Weekly Report</h1>
	</header>

	<main>
		<form method="post" action="submit_report.php">
			<label for="subject_name">Subject Name:</label>
			<input type="text" id="subject_name" name="subject_name" required>

			<label for="class_name">Class:</label>
			<input type="text" id="class_name" name="class_name" required>

			<label for="class_hours">Class Hours:</label>
			<input type="number" id="class_hours" name="class_hours" required>

			<label for="topics_covered">Topics Covered:</label>
			<textarea id="topics_covered" name="topics_covered" rows="4" cols="50" required></textarea>

			<label for="description">Description:</label>
			<textarea id="description" name="description" rows="4" cols="50" required></textarea>

			<input type="submit" value="Submit">
		</form>
	</main>

	<script>
        // validate class hours input to be a positive integer
const classHoursInput = document.getElementById("class_hours");

classHoursInput.addEventListener("input", function(event) {
  const value = parseInt(event.target.value);

  if (isNaN(value) || value <= 0) {
    event.target.setCustomValidity("Please enter a positive integer");
  } else {
    event.target.setCustomValidity("");
  }
});

    </script>
</body>
</html>

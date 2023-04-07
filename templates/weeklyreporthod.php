<!DOCTYPE html>
<html>
<head>
	<title>HOD Portal</title>
	
</head>
<style>
    table {
	border-collapse: collapse;
	width: 100%;
}

th, td {
	text-align: left;
	padding: 8px;
}

th {
	background-color: #333;
	color: white;
}

tr:nth-child(even) {
	background-color: #f2f2f2;
}

tr:hover {
	background-color: #ddd;
}
</style>

<body>
	<header>
		<h1>HOD Portal</h1>
	</header>

	<main>
		<section>
			<h2>Weekly Reports</h2>
			<?php include 'get_reports.php'; ?>
		</section>
	</main>
</body>
</html>

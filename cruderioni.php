<!DOCTYPE html>
<html>
<head>
	<title>Ad Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Ad Management System</h1>

	<!-- Form for creating a new ad -->
	<form id="new-ad-form">
		<h2>Create New Ad</h2>
		<label for="title">Title:</label>
		<input type="text" id="title" name="title"><br>
		<label for="description">Description:</label>
		<textarea id="description" name="description"></textarea><br>
		<label for="price">Price:</label>
		<input type="number" id="price" name="price"><br>
		<button type="submit">Create Ad</button>
	</form>

	<!-- Table for displaying existing ads -->
	<table id="ads-table">
		
  


		
		<tbody>
			<!-- Ads will be added dynamically here -->
		</tbody>
	</table>

	
	<script src="script.js"></script>
</body>
</html>

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
	margin-top: 20px;
}

label {
	display: inline-block;
	width: 100px;
}

input[type="text"], input[type="number"], textarea {
	padding: 5px;
	margin-bottom: 10px;
}

button {
	padding: 5px;
	background-color: #007bff;
	color: #fff;
	border: none;
	border-radius: 3px;
	cursor: pointer;
}

button:hover {
	background-color: #0062cc;
}

table {
	margin-top: 30px;
	border-collapse: collapse;
	width: 100%;
}

th, td {
	padding: 10px;
	text-align: left;
	border-bottom: 1px solid #ddd;
}

th {
	background-color: #007bff;
	color: #fff;
}

tr:hover {
	background-color: #f5f5f5;
}
</style>






<!DOCTYPE html>
<html>
<head>
	<title>Jchan</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Jchan</h1>
	<a href="index.php" id="homeButton">Home</a>
	<a href="createDiscussion.html" id="createDiscussionButton">Create a Discussion</a>

	<form action="action.php" method="post">
		<label for="userName">Username:</label>
		<input type="text" name="userName" id="userName">
		<label for="password">Password:</label>
		<input type="password" name="password" id="password">
	</form>

	<?php 
	include 'dbQuery.php';
	include 'dbPost.php';
	?>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
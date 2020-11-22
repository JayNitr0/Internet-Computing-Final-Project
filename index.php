<!DOCTYPE html>
<html>
<head>
	<title>Jchan</title>
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
	

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Create Discussion</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Jchan</h1>
	<a href="index.php" id="homeButton">Home</a>
	<a href="createDiscussion.php" id="createDiscussionButton">Create a Discussion</a>

	<form action="action.php" method="post">
		<label for="userName">Username:</label>
		<input type="text" name="userName" id="userName">
		<label for="password">Password:</label>
		<input type="password" name="password" id="password">
	</form>

	<?php
	$usernameCookie = $_COOKIE['usernameCookie'];
	?>

	<h2>Create a Discussion</h2>
	<form action="index.php" method="post">
		<input type="text" name="postTitle" id="postTitle" placeholder="title">
		<input type="text" name="postText" id="postText" placeholder="text(optional)">
		<input type="submit" name="postButton" id="postButton" value="Post">
		<input type="hidden" name="username" id="username" value="<?= $usernameCookie ?>">
	</form>
</body>
</html>
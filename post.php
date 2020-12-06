<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Discussion</title>
</head>
<body>
	<?php 
	include 'getPostByID.php';
	include 'dbComment.php';
	$urlID = $_GET['id'];
	$usernameCookie = $_COOKIE['usernameCookie'];
	?>

	<form action="post.php?id=<?= $urlID ?>" method="post">
		<input type="text" name="postComment" id="postComment" placeholder="Make a comment">
		<input type="submit" name="postCommentButton" id="postCommentButton" value="Post">
		<input type="hidden" name="postID" id="postID" value="<?= $urlID ?>">
		<input type="hidden" name="username" id="username" value="<?= $usernameCookie ?>">
	</form>

	<?php
	include "getCommentByID.php"; 
	?>
	
</body>
</html>

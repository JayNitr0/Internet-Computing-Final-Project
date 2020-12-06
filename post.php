<!DOCTYPE html>
<html>
<head>
	<title>Discussion</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
			<h1 class="text-center" id="Jchan">Jchan</h1>
			<a href="index.php" id="homeButton">Home</a>
			<a href="createDiscussion.html" id="createDiscussionButton">Create a Discussion</a>
		<?php 
		include 'getPostByID.php';
		include 'dbComment.php';
		$urlID = $_GET['id']
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
		//include 'dbCommentQuery.php';
		?>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>

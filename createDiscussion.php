<!DOCTYPE html>
<html>
<head>
	<title>Create Discussion</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1 class="text-center" id="Jchan">Jchan</h1>
		<a href="index.php" id="homeButton">Home</a>
		<a href="createDiscussion.php" id="createDiscussionButton">Create a Discussion</a>

		<h2>Create a Discussion</h2>
		<form action="index.php" method="post" style="width: 50%">

	 			<div class="form-group">
	    		<label for="Title"><strong>Title</strong></label>
	   			<input type="text" class="form-control" id="postTitle" name="postTitle" placeholder="title">
	  			</div>

				<div class="form-group">
				<label for="text"><strong>Post</strong></strong></label>
				<textarea class="form-control" id="postText" name="postText" rows="3" style="width: 100%"></textarea>
				</div>

				<div class="row ml-1">
					<input type="submit" name="postButton" id="postButton" value="Post" class="btn btn-info">
				</div>

				<?php
				$usernameCookie = $_COOKIE['usernameCookie'];
				?>
				<input type="hidden" name="username" id="username" value="<?= $usernameCookie ?>">
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
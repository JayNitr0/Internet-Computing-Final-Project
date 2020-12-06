<!DOCTYPE html>
<html>
<head>
	<title>Jchan</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1 class="text-center" id="Jchan">Jchan</h1>
		<div class="row">
			
			<div class="col-6">
				<a class="text-center" href="index.php" id="homeButton"><strong>Home</strong></a>
			</div>
			
			<div class="col-6">
				<a class="text-center" href="createDiscussion.php" id="createDiscussionButton"><strong>Create a Discussion</strong></a>
			</div>
		</div>

		<?php 
		echo "<div class=\"row justify-content-center\">";
			include 'dbQuery.php';
    	echo "</div>";
    	
    	include 'dbPost.php';
		?>
	</div>

	<script src="askForUsername.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
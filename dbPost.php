<?php
include 'dbConnection.php';
	
if (isset($_POST["postButton"])) {
	$postTitleData = $_POST["postTitle"];
	$postTextData = $_POST["postText"];

	$query = "insert into post(title,text) values('$postTitleData' , '$postTextData')";
	$run = mysqli_query($conn,$query);
}
?>




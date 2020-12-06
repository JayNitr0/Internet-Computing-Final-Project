<?php
include 'dbConnection.php';
	
if (isset($_POST["postButton"])) {
	$postTitleData = $_POST["postTitle"];
	$postTextData = $_POST["postText"];
	$postUsernameData = $_POST["username"];

	$query = "insert into post(title,text,username) values('$postTitleData' , '$postTextData' , '$postUsernameData')";
	$run = mysqli_query($conn,$query);
}
?>




<?php
include 'dbConnection.php';
	
if (isset($_POST["postCommentButton"])) {
    $postCommentData = $_POST["postComment"];
    $postUsernameData = $_POST["username"];
    
    $urlID = $_POST['postID'];

	$query = "insert into comment(commentText,postID,username) values('$postCommentData' , '$urlID' , '$postUsernameData')";
	$run = mysqli_query($conn,$query);
}
?>



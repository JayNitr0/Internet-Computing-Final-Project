<?php
include 'dbConnection.php';
	
if (isset($_POST["postCommentButton"])) {
    $postCommentData = $_POST["postComment"];
    
    $urlID = $_POST['postID'];

	$query = "insert into comment(commentText,postID) values('$postCommentData' , '$urlID')";
	$run = mysqli_query($conn,$query);
}
?>



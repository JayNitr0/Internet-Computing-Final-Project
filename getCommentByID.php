<?php
include 'dbConnection.php'; 

$sql = "SELECT * FROM comment WHERE postID = " . $_GET['id'] . ";";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($fetchRow = mysqli_fetch_assoc($result)) {
		$postCommentQuery = $fetchRow['commentText'];

		echo "<span class='postCommentSubmitted'>$postCommentQuery</span><br>";
	}
}
?>
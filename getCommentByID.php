<?php
include 'dbConnection.php'; 

$sql = "SELECT * FROM comment WHERE postID = " . $_GET['id'] . ";";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($fetchRow = mysqli_fetch_assoc($result)) {
		$postCommentQuery = $fetchRow['commentText'];
		$postUsernameQuery = $fetchRow['username'];

		echo "<div id=\"postcomment\">";
		echo "<span class='username'>$postUsernameQuery</span><br>";
		echo "<p class='postCommentSubmitted'>$postCommentQuery</p>";
		echo "</div>";
	}
}
?>
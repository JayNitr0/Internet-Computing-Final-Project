<?php
include 'dbConnection.php'; 

$sql = "SELECT * FROM post WHERE postID = " . $_GET['id'] . ";";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($fetchRow = mysqli_fetch_assoc($result)) {
		$postTextQuery = $fetchRow['text'];
		$postTitleQuery = $fetchRow['title'];
 		$postUsernameQuery = $fetchRow['username'];
 		
 		echo "<div id=\"titlecomment\">";
		echo "<span class='username'>$postUsernameQuery</span><br>";
		echo "<span class='postTitle'>$postTitleQuery</span><br>";
		echo "<span class='postTextSubmitted'>$postTextQuery</span>";
		echo "</div>";
	}
}
?>
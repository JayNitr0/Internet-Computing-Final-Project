<?php
include 'dbConnection.php'; 

$sql = "SELECT * FROM post WHERE postID = " . $_GET['id'] . ";";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($fetchRow = mysqli_fetch_assoc($result)) {
		$postTextQuery = $fetchRow['text'];
		$postTitleQuery = $fetchRow['title'];
 	
 	echo "<div id=\"titlecomment\">";
		echo "<span class='postTitle'><strong>$postTitleQuery</strong></span><br>";
		echo "<span class='postTextSubmitted'>$postTextQuery</span>";
	echo "</div>";
	}
}
?>
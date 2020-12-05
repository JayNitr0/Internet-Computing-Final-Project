<?php 
include 'dbConnection.php'; 
$sql = "SELECT * FROM post ORDER BY postID desc;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


if ($resultCheck > 0) {
	while ($fetchRow = mysqli_fetch_assoc($result)) {
		$postIdQuery = $fetchRow['postID']; 
		$postTitleQuery = $fetchRow['title'];
		$idURL = "/Internet-Computing-Final-Project/post.php?id=" . $postIdQuery;

		echo "<span class='postTitleSubmitted'><a href=$idURL>$postTitleQuery</a></span><br>";
	}
}
?>

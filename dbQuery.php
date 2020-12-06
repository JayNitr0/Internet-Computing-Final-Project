<?php 
include 'dbConnection.php'; 
$sql = "SELECT * FROM post ORDER BY postID desc;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($fetchRow = mysqli_fetch_assoc($result)) {
		$postIdQuery = $fetchRow['postID']; 
		$postTitleQuery = $fetchRow['title'];
		$postUsernameQuery = $fetchRow['username'];
		$idURL = "/Internet-Computing-Final-Project/post.php?id=" . $postIdQuery;
		$postTextQuery = $fetchRow['text'];

		echo "
		<div class=\"card\" style=\"width: 50rem;\">
  		<div class=\"card-body\">
    	<h5 class=\"card-title\"><a href=$idURL>$postTitleQuery</a></h5>
   		<h6 class=\"card-subtitle mb-2 text-muted\">$postUsernameQuery</h6>
    	<p class=\"card-text\">$postTextQuery.</p>
 		</div>
		</div>
		";
	}
}
?>

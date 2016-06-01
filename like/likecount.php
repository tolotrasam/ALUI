<?php require '../connect.php' ;
$code = $feed_code;
//echo 'CP1';
$sql = "select author from event WHERE nature = 'like' and item ='$code'";
 $result = $conn->query($sql);
	$likecount = mysqli_num_rows($result);
  while($row = $result->fetch_assoc()) {
	 $liker = $row['author'];
	
}
?>
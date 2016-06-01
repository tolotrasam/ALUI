<?php
require '../session.php';
include('../connect.php');

 // $sql = "SELECT * FROM `feedcomment` WHERE `com_code` IN (".implode(',',$feed_code).")";
 $sql = "SELECT * FROM event order by date desc limit 1  ";
	   //echo 'checkoint 2';
 $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {

    $author = $row['author'];
    $action = $row['action'];
    $item = $row['item'];
    $date = $row['date'];
    $place = $row['place'];
    $nature = $row['nature'];
	$now = date("Y-m-d H:i:s",time());
	 echo $date;
  }
?>
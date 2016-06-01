<?php
 require '../../connect.php';

$tablemessage = $_GET['tablemessage'];
  $sql="SELECT date FROM $tablemessage ORDER BY date DESC limit 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $conversation = $row["conversation_name"];
		$date = $row["date"];
		$id = $row["id"];
		$id = $row["date"];
		echo $date;
    }
} else {
    echo "no message row fetched";
}

  $sql="SELECT id FROM conversation";
$result = $conn->query($sql);
echo $count_row =  mysqli_num_rows($result);

$conn->close();
?>
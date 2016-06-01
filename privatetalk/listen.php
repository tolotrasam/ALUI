<?php
 require '../connect.php';
 
// echo "<br>checkpoint 1<br>";
$tablemessage = $_GET['tablemessage'];
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error($conn);
  }
  $sql="SELECT * FROM $tablemessage ORDER BY date DESC limit 1";
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
$conn->close();
?>
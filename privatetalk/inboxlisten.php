<?php
require '../session.php';
 require '../connect.php';
  $sql="SELECT * FROM conversation where participant1 = '$login_session' or participant2= '$login_session' ORDER BY date DESC limit 1";
// echo 'checkpoint1';
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $conversation = $row["conversation_name"];
		$date = $row["date"];
		$participant1 = $row["participant1"];
		$participant2 = $row["participant2"];
		$id = $row["id"];
		echo $date;
    }
} else {
    echo "no inbox row fetched";
}
$conn->close();
?>
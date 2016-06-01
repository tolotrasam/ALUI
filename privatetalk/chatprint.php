 <?php
//how to fetch data from database2
 require '../connect.php';
  $sql="SELECT * FROM chatbox where username = '$login_session' or username = 'anita' ORDER BY id DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $username = $row["username"];
		$message = $row["message"];
		echo "<p>$username: $message.</p>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
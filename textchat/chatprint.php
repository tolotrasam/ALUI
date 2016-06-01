 <?php
 require('../session.php');
//how to fetch data from database2
require '../connect.php';
$login_session;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error($conn);
  }
  $sql="SELECT * FROM chatbox  user ORDER BY id DESC";
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
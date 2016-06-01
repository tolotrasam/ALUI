 <?php
//how to fetch data from database2
//table variables
$table = "newfeed";
//column
$username_tbl = "username";
$posttbl = "post";
$datetbl = "date";
//special selection
$now = date("Y-m-d H:i:s",time());
$lastid = 5;
// Create connection
require '../connect.php';

  // $sql="SELECT * FROM $table where $datetbl < $now ORDER BY $datetbl DESC limit 30";
  $sql="SELECT * FROM $table where id > $lastid limit 1";

  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		//mysqli_connect($servername, $username, $password, $database)->query("SELECT * FROM chatbox ORDER BY id DESC");->fetch_assoc()["username"]
        $username = $row[$username_tbl];
		$post = $row[$posttbl];
		$date = $row [$datetbl];
		// I disabled the echo, it is in the welcome.php
		// echo "<p>$username posted: </p><p> $post.</p>at $date" ;
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<?php
//how to fetch data from database2
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "newfeed_db";
//table variables
$table = "newfeed";
//column
$username_tbl = "username";
$posttbl = "post";
$datetbl = "date";
//special selection
$now = date("Y-m-d H:i:s",time());
// $lastid = 5;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error($conn);
  }
  // $sql="SELECT * FROM $table where $datetbl < $now ORDER BY $datetbl DESC limit 30";
  $sql="SELECT * FROM $table";
   // where id = (SELECT max(id) FROM $table

  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		//mysqli_connect($servername, $username, $password, $database)->query("SELECT * FROM chatbox ORDER BY id DESC");->fetch_assoc()["username"]
        $username = $row[$username_tbl];
		$post = $row[$posttbl];
		$date = $row [$datetbl];
		$id = $row [id];
		// I disabled the echo, it is in the welcome.php
		// echo "<p>$username posted: </p><p> $post.</p>at $date" ;
        echo '<h2>'.$username.' posted:</h2><h3>'.$post.'</h3><h4> at '.$date.'</h4>';
    }
} else {
    echo "0 results";
}
?>
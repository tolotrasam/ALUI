<?php
// echo 'checkpoint1';
require '../session.php';
require '../connect.php';
// echo $check = '<br>checkpoint1<br>';
/* echo "Connected successfully i Tolokely";
 */
 //setting two dates as interval by substracting one by a duration
 $expire_stamp = date('Y-m-d H:i:s', strtotime("-2 sec"));
$now_stamp    = date("Y-m-d H:i:s");
//selective query by interval of date
// echo '<br>checkpoint2';

 $result = $conn->query("SELECT * FROM loginlist1 where lastseen between '$expire_stamp' and '$now_stamp'");
if ($result->num_rows > 0) {
	// echo $check = '<br>checkpoint3<br>';
    // output data of each row
	foreach($result as $row) {
			$activeuser = $row["username"];
			$date = $row ["lastseen"];
echo $activeuser;
}
}else{
		echo 'no active user which weird cause youre connected';
	
	}
 ?>
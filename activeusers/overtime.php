<?php
require('../session.php');
//phpinfo() this is to create a new database from php;
require '../connect.php';

//insert time
date_default_timezone_set('Russia/Moscow');
// echo date("Y");
$now = date("Y-m-d H:i:s",time());
//write/insert on database, you must be already connected to one database, using $conn
$sql = "UPDATE loginlist1 SET lastseen='$now' WHERE username='$login_session'";
//update
if ($conn->query($sql) === TRUE) {
    ;
} else {
    echo "Error updating record: " . $conn->error;
}
mysqli_close($conn);
?>


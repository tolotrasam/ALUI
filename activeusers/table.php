<?php
//phpinfo() this is to create a new database from php;
require '../connect.php';

// sql to create table
$sql = "ALTER TABLE loginlist1
  ADD (lastseen TIMESTAMP)";
if ($conn->query($sql) === TRUE) {
    echo "Table lastactivity created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
//insert time
date_default_timezone_set('Russia/Moscow');
// echo date("Y");
$now = date("Y-m-d H:i:s",time());
// write/insert on database, you must be already connected to one database, using $conn

// $sql = "INSERT INTO lastactivity (username,password,reg_date) VALUES ('Prisca','Miora','$now')";
// if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
// } else {
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// mysqli_close($conn);
?>


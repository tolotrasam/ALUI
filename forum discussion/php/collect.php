<?php
   require('../../session.php');

require '../../connect.php';

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) NOT NULL,
message VARCHAR(500) NOT NULL
)";

// sql1 Collect the message to the Database
$value2 = $login_session;
$value1 = $_POST['usermsg'];
$sql2 = "INSERT INTO chatbox (message,username) VALUES ('$value1','$value2')";
// redirect php to the index.html
if (mysqli_query($conn, $sql2)) {
    header('Location: ../textchat.html');
exit;
	
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


<?php
echo 'hi';
// notification ($author, $action, $nature, $recipicient, $item, $item_code, $place);

// function definition create databases and table and insertion
  function notification ($author, $action, $nature, $recipicient, $item, $item_code, $place){
$now = date("Y-m-d H:i:s",time());

// $recipient = $_post['recipient'];

require('../session.php');
echo "the logged user in the function database creation is :<br>";
echo '<br>'.$login_session.'<br>';
//phpinfo() this is to create a new database from php;
 require '../connect.php';
echo "Connected successfully in db creation <br>";
//creating table and column var
$table1 = 'event';

 require '../connect.php';
  // sql to create table2 = conversation (global for everyone)

//first table = name of the conversation (specific)
$sql1 = "create TABLE $table1 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
author VARCHAR(50) NOT NULL,
recipicient text(5000) NOT NULL,
liker text(8000) NULL,
action VARCHAR(100) NOT NULL,
item text(500) NOT NULL,
item_code VARCHAR(50)  NULL,
date timestamp NOT NULL,
nature VARCHAR(500) NOT NULL,
place VARCHAR (50)
)";
if ($conn->query($sql1) === TRUE) {
    echo "<br>Table $table1 created successfully <br>";
} else {
    echo "<br> Error creating table '$table1'<br>: " . $conn->error;
  echo '<br>';}


//inserting message specific
$sql1 = "INSERT INTO $table1 (author, recipicient, action, item, item_code, date,nature, place) VALUES
('$author','$recipicient','$action','$item','$item_code','$now','$nature','$place')";
  if (mysqli_query($conn, $sql1)) {
    echo "notification updated successfully";
	 // header ('location: messageprint.php');
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
  }
  }
?>
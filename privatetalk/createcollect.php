<?php
 $recipient = $_POST['recipient'];
 echo "the recipient you wrote is: <br>";
 echo $recipient;
  require('../session.php');
  echo "<br>the logged user is<br>";
  echo $login_session;
  // checkuser($recipient);
  // function checkuser ($recipient){
if (empty($recipient )) {
	echo "<br> but no recipient assigned"; die;
};
if (isset($recipient)){ echo "<br> you wrote something in the recipient<br>";
checkusername ($recipient,$login_session);};
//function definition check if username exist in loginlist1
function checkusername($recipient,$login_session){
	//phpinfo() this is to create a new database from php;
 require '../connect.php';
// echo "$recipient";
// checking by selection
  $sql="SELECT * FROM loginlist1
  where username = '$recipient' and username != '$login_session'";
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // check if the recipicient exist
	    while($row = $result->fetch_assoc()) {
	$username = $row["username"];
		echo "<br> we feth that person <br> ";
		echo ''.$username.'<br>';
	//check conversation with this function
    checkconversation ($recipient,$login_session);
		}}
else {
    echo " this person is not in the list, check the spelling...or you're trying to send a message to yourself";
}
$conn->close();
};
//this is the definition of the function checkconversation
function checkconversation($recipient,$login_session){
		//phpinfo() this is to create a new database from php;
 require '../connect.php';
 
echo "Connected successfully for conversation checking <br>";
// echo "$recipient";
// checking by selection
 echo $string1 = $recipient.$login_session;
echo $string2 = $login_session.$recipient;
echo $string3 = 'check point first in check if conversation existed';
  $sql="SELECT * FROM conversation where conversation_name = '$string1' or  conversation_name = '$string2'";
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // check if the recipicient exist
	    while($row = $result->fetch_assoc()) {
	//skip creating the table, database,  go inserting on
	$conversation = $row["conversation_name"];
		echo "<p>conversation $conversation is already in the list";
		insertmessage($recipient, $conversation);
		updateconversation($recipient);}}
 else {
	 //go to creation of table and database
	 echo "the conversation between the two people don't exist yet <br>";
//function will create the databse and table from scratch
   creation ($recipient);
}}
$conn->close();
function connection ($recipient){
	//phpinfo() this is to create a new database from php;
 require '../connect.php';
echo "Connected successfully in db creation <br>";
//creating table and column var
$string1 = $recipient.$login_session;
$string2 = $login_session.$recipient;
$table1 = $recipient.$login_session;
echo $table;
$table2 = 'conversation';
$sendercol = "sender";
// $recipienttbl = "recipient";
$col0= "conversation_name";
$col1 = "sender";
$col11 = "participant1";
$login = $login_session;
$col2 = "recipient";
$col22 = "participant2";
$col2 = "recipient";
$col3 = "lastmessage";
$col4 = "message";
$col5 = "date";
$col6 = "conversation_name";
$col7 = "totalofmessage";
$col8 = "creationdate";
$col9 = "seen";
$filetype = "filetype";
$filename = "filename";
$filepath = "filepath";
//new var
$now = date("Y-m-d H:i:s",time());
$value1 = $login_session;
$value2 = $_POST['recipient'];
$value3 = $_POST['message'];
$value4 = $_post['uploadfile'];
$value5 = $_post['recipient'];
// $recipient = $_post['recipient'];
$target_Folder = "messagepicture/";
$file_name = $_FILES['uploadfile']['name'];
$file_type = $_FILES['uploadfile']['type'];
$table1 = $recipient.$login_session;
$table2 = 'conversation';
echo $sendercol = "checkpoint 1 before creation_";};
////insertion
// function definition create databases and table and insertion
  function creation ($recipient){
require('../session.php');
echo "the logged user in the function database creation is :<br>";
echo '<br>'.$login_session.'<br>';
//phpinfo() this is to create a new database from php;
 require '../connect.php';
echo "Connected successfully in db creation <br>";
//creating table and column var
$table1 = $recipient.$login_session;
echo $table;
$table2 = 'conversation';
$sendercol = "sender";
// $recipienttbl = "recipient";
$col0= "conversation_name";
$col1 = "sender";
$col11 = "participant1";
$login = $login_session;
$col2 = "recipient";
$col22 = "participant2";
$col2 = "recipient";
$col3 = "lastmessage";
$col4 = "message";
$col5 = "date";
$col6 = "conversation_name";
$col7 = "totalofmessage";
$col8 = "creationdate";
$col9 = "seen";
$filetype = "filetype";
$filename = "filename";
$filepath = "filepath";
// Create a Database/////////////////////////////////////////$$$$$$$$$$$$$$$$$$$$$$$
// $sql = "CREATE DATABASE $database ";
// if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully";
// } else {
    // echo "Error creating '$database': <br>" . $conn->error;
// echo '<br>';}
//closing connection, cause we need to connect to the new database
// mysqli_close($conn);
//new connection with the previous variables
 require '../connect.php';
  // sql to create table2 = conversation (global for everyone)
$sql2 = "CREATE TABLE $table2 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
$col0 VARCHAR (500) NOT NULL,
$col11 VARCHAR(50) NOT NULL,
$col22 VARCHAR(50) NOT NULL,
$col3 TEXT(5000) NOT NULL,
$col7 int(10) NULL,
$col5 TIMESTAMP,
$col8 TIMESTAMP)";
if ($conn->query($sql2) === TRUE) {
    echo "Table $table2 created successfully <br>";

	} else {
    echo "Error creating table '$table2': " . $conn->error;
  }
//first table = name of the conversation (specific)
$sql1 = "create TABLE $table1 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
$col1 VARCHAR(50) NOT NULL,
$col2 VARCHAR(50) NOT NULL,
$col4 TEXT(5000) NOT NULL,
$filename VARCHAR(500)  NULL,
$filepath VARCHAR(500)  NULL,
$filetype VARCHAR(500)  NULL,
$col5 TIMESTAMP,
$col9 TINYINT(1) NOT NULL DEFAULT '0'
)";
if ($conn->query($sql1) === TRUE) {
    echo "<br>Table $table1 created successfully <br>";
} else {
    echo "<br> Error creating table '$table1'<br>: " . $conn->error;
  echo '<br>';}

	//now insert the message and the conversation in the database
  insertmessage($recipient,$recipient.$login_session);
  insertnewconversation($recipient); };
//////////////////////////////////////////////////////////////////////////////
//write/insert on database, you must be already connected to one database, using $conn
//inserting data from html to php
  function insertmessage ($recipient, $conversation){
	  require('../session.php');
	  //phpinfo() this is to create a new database from php;
 require '../connect.php';
echo "Connected successfully in data insertion <br>";

global $recipient;
$string1 = $recipient.$login_session;
$string2 = $login_session.$recipient;
$table1 = $recipient.$login_session;
//previous var
$col0= "conversation_name";
$col1 = "sender";
$col11 = "participant1";
$login = $login_session;
$col2 = "recipient";
$col22 = "participant2";
$col3 = "lastmessage";
$col4 = "message";
$col5 = "date";
$col6 = "conversation_name";
$col7 = "totalofmessage";
$col8 = "creationdate";
$col9 = "seen";
$filetype = "filetype";
$filename = "filename";
$filepath = "filepath";
//new var
$now = date("Y-m-d H:i:s",time());
$value1 = $login_session;
$value2 = $_POST['recipient'];
$value3 = $_POST['message'];
$value4 = $_post['uploadfile'];
$value5 = $_post['recipient'];
// $recipient = $_post['recipient'];
$target_Folder = "messagepicture/";
$file_name = $_FILES['uploadfile']['name'];
$file_type = $_FILES['uploadfile']['type'];
$table1 = $recipient.$login_session;
$table2 = 'conversation';
echo $sendercol = "checkpoint 2 before insertmessage";

//inserting message specific
$sql1 = "INSERT INTO $conversation ($col1,$col2, $col4, $col5, $filetype,$filename,$filepath,$col9) VALUES
('$value1','$value2','$value3','$now','$file_type','$file_name','../$target_Folder$file_name', '1' )";
if (mysqli_query($conn, $sql1)) {
	//if the picture is uploaded sucessfully,it will be moved inside the container folder
	$target_Path = $target_Folder.basename( $_FILES['uploadfile']['name'] );
$savepath = $target_Path.basename( $_FILES['uploadfile']['name'] );
        move_uploaded_file( $_FILES['uploadfile']['tmp_name'], "../$target_Path" );
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
  }};

function insertnewconversation ($recipient){
	 require('../session.php');
//insert in data into table conversation id
	//phpinfo() this is to create a new database from php;
 require '../connect.php';
echo "Connected successfully in db creation <br>";
//creating table and column var
$string1 = $recipient.$login_session;
$string2 = $login_session.$recipient;
$table1 = $recipient.$login_session;
echo $table;
$table2 = 'conversation';
$sendercol = "sender";
// $recipienttbl = "recipient";
$col0= "conversation_name";
$col1 = "sender";
$col11 = "participant1";
$login = $login_session;
$col2 = "recipient";
$col22 = "participant2";
$col2 = "recipient";
$col3 = "lastmessage";
$col4 = "message";
$col5 = "date";
$col6 = "conversation_name";
$col7 = "totalofmessage";
$col8 = "creationdate";
$col9 = "seen";
$filetype = "filetype";
$filename = "filename";
$filepath = "filepath";
//new var
$now = date("Y-m-d H:i:s",time());
$value1 = $login_session;
$value2 = $_POST['recipient'];
$value3 = $_POST['message'];
$value4 = $_post['uploadfile'];
$value5 = $_post['recipient'];
// $recipient = $_post['recipient'];
$target_Folder = "messagepicture/";
$file_name = $_FILES['uploadfile']['name'];
$file_type = $_FILES['uploadfile']['type'];
$table1 = $recipient.$login_session;
$table2 = 'conversation';
echo $sendercol = "checkpoint 3 before insertnewconversation in conversation";
$sql2 = "INSERT INTO $table2 ($col0,$col11,$col22,$col3,$col8,$col5) VALUES
('$table1','$value1','$value2','$value3','$now', '$now')";
  if (mysqli_query($conn, $sql2)) {
    echo "New conversation registered successfully";
	header ('location: privatechat.php');
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
   }};
  function updateconversation ($recipient){
	   require('../session.php');
	//phpinfo() this is to create a new database from php;
 require '../connect.php';
echo "Connected successfully in db creation <br>";
//creating table and column var
$string1 = $recipient.$login_session;
$string2 = $login_session.$recipient;
$table1 = $recipient.$login_session;
echo $table;
$table2 = 'conversation';
$sendercol = "sender";
// $recipienttbl = "recipient";
$col0= "conversation_name";
$col1 = "sender";
$col11 = "participant1";
$login = $login_session;
$col2 = "recipient";
$col22 = "participant2";
$col2 = "recipient";
$col3 = "lastmessage";
$col4 = "message";
$col5 = "date";
$col6 = "conversation_name";
$col7 = "totalofmessage";
$col8 = "creationdate";
$col9 = "seen";
$filetype = "filetype";
$filename = "filename";
$filepath = "filepath";
//new var
$now = date("Y-m-d H:i:s",time());
$value1 = $login_session;
$value2 = $_POST['recipient'];
$value3 = $_POST['message'];
$value4 = $_post['uploadfile'];
$value5 = $_post['recipient'];
// $recipient = $_post['recipient'];
$target_Folder = "messagepicture/";
$file_name = $_FILES['uploadfile']['name'];
$file_type = $_FILES['uploadfile']['type'];
$table1 = $recipient.$login_session;
$table2 = 'conversation';
echo $sendercol = "checkpoint 4 before update conversation";
///////insertion
	  $sql2 = "UPDATE $table2 set $col11='$value1',$col22 ='$value2',$col3= '$value3',$col5= '$now' where conversation_name = '$string1' or  conversation_name = '$string2'";
  if (mysqli_query($conn, $sql2)) {
    echo "Conversation  message altered successfully";
	 header ('location: messageprint.php');
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
 }}
?>

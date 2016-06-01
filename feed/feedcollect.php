 <?php
  require('../session.php');
  require_once ('../comment/functions.php');
  require_once('../notification/notificationcollect.php');
  echo 'start here';
  echo $full_name;
  echo '<br>';
  echo $login_session;
  echo '<br>';
//phpinfo() this is to create a new database from php;
//creating table and column var
$table = "newfeed";
$username_tbl = "username";
$posttbl = "post";
$datetbl = "date";
$feed_code = "feed_code";
$filetype = "filetype";
$filename = "filename";
$filepath = "filepath";
$filetype = "filetype";
// Create connection
require '../connect.php';
//new connection with the previous variables
  // sql to create table
$sql = "CREATE TABLE $table (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
$username_tbl VARCHAR(30) NOT NULL,
$posttbl TEXT(2000) NOT NULL,
$datetbl TIMESTAMP,
$feed_code VARCHAR (10),
$filename VARCHAR(500)  NULL,
$filepath VARCHAR(500)  NULL,
$filetype VARCHAR(500)  NULL,
type VARCHAR(50)  ,
audience VARCHAR(500)  ,
author VARCHAR(500)  NULL,
course VARCHAR(50) ,
title VARCHAR(500) NOT NULL ,
audience2 VARCHAR(500),
linkeditem VARCHAR(10) 
)";

if ($conn->query($sql) === TRUE) {
    echo "Table newfeed created successfully";
} else {
    echo "Error creating '$table': " . $conn->error;
}
//////////////////////////////////////////////////////////////////////////////
//write/insert on database, you must be already connected to one database, using $conn
//inserting data from html to php
$now = date("Y-m-d H:i:s",time());
$value2 = $_POST['mainfeed'];
$value1 = $login_session;
$value3 = $_post['uploadimage'];
$target_Folder = "feedpicture/";
$file_name = $_FILES['uploadimage']['name'];
$file_type = $_FILES['uploadimage']['type'];
$full_name;
$value4 = $_POST['title-mainfeed'];
$value8 = $_POST['audience'];
$value7 = $_POST['type'];
$value5 = $_POST['course'];
$value6 = $_POST['audience2'];
$linkeditem = $_POST['linkeditem'];
$recipient = ''.$value8.' '.$value6.'';
//this is to create a com code
$rand = generateRandomString();

//this is to write in the  event tomeline
$nature = $value7;
$action = 'posted';
$author = $login_session;
$item = $value4;
$place = $recipient;
$item_code = $rand;
notification ($author, $action, $nature, $recipient, $item, $item_code, $place);


//inserting data
$sql = "INSERT INTO $table ($username_tbl,$posttbl,$datetbl,$filename,filepath, $feed_code, filetype, title, course, audience2, type, audience, author, linkeditem) VALUES 
('$value1','$value2','$now','$file_name','$target_Folder$file_name', '$rand', '$file_type', '$value4','$value5','$value6','$value7','$value8', '$full_name', '$linkeditem'  )";
if (mysqli_query($conn, $sql)) {
	//if the picture is uploaded sucessfully,it will be moved inside the container folder
	$target_Path = $target_Folder.basename( $_FILES['uploadimage']['name'] );
$savepath = $target_Path.basename( $_FILES['uploadimage']['name'] );
        move_uploaded_file( $_FILES['uploadimage']['tmp_name'], "../$target_Path" );
      header ('location: ../welcome.php'); 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>

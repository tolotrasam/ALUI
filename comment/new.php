<?php
//this is the action php of comments
	require_once 'functions.php';
	require '../session.php';
	require_once('../notification/notificationcollect.php');
echo 'checkpoint1<br>';
			  	// echo $check = '<br> checkpoint 0 inside new user: '.$login_session.' <br>';
/////
	//$feed_code and $author are from the function paramater
	
//creating table and column var
$table = "feedcomment";
$username_tbl = "username";
$comment = "comment";
$datetbl = "date";
$feed_codetbl = "feed_code";
$com_code = "com_code";
$is_child = "is_child";
$filetype = "filetype";
$filename = "filename";
$filepath = "filepath";

  // sql to create table
$sql = "CREATE TABLE $table (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
author VARCHAR(30) NOT NULL,
$comment VARCHAR(1000) NOT NULL,
date TIMESTAMP,
$feed_codetbl VARCHAR (10),
$is_child TINYINT(1) NOT NULL DEFAULT '0',
$filename VARCHAR(500)  NULL,
$filepath VARCHAR(500)  NULL,
$filetype VARCHAR(500)  NULL,
com_code VARCHAR (10) NULL,
par_code VARCHAR (10) NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table newfeed created successfully";
} else {
    echo "Error creating '$table': " . $conn->error;
}
		  	// echo $check = "<br> checkpoint 1 inside new.php table commentfeed created <br>";

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
$reply = $_REQUEST['text_cmt'];
	$date = date('Y-m-d H:i:s');
	$author = $login_session;
	$feed_code = $_GET['com_code'];
	 	// echo $check = '<br> checkpoint 2 call author and com_code: '.$feed_code.' <br>';


//this is to create a com code
	$rand = generateRandomString();
			#checkString($rand);
$author = $login_session;
$action = 'commented';
$nature = 'comment';
$item = $reply;
$item_code = $rand;
$place = $feed_code;
$recipient = 'the owner first and then everyone that commented this';
notification ($author, $action, $nature, $recipient, $item, $item_code, $place);


//inserting data
$sql = "INSERT INTO $table (`feed_code`, `comment`, `com_code`, `is_child`, `author`, `date`, filename, filetype, filepath, par_code) VALUES 
('$feed_code','$reply', '$rand','0', '$author', '$date', '$file_name','$file_type','$target_Folder$file_name', '' )";
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
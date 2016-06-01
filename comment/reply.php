<?php
	
	require_once 'functions.php';
	require '../session.php';
		require_once('../notification/notificationcollect.php');
			  	// echo $check = '<br> checkpoint 0 inside new user: '.$login_session.' <br>';

$table = "feedcomment";

	echo $com_code = $_REQUEST['par_code'];
	echo '<br>';
	echo $reply = $_REQUEST['text_cmt'];
		echo '<br>';

	echo $date = date('Y-m-d H:i:s');	echo '<br>';

	echo $feed_code = $_get['com_code'];	echo '<br>';


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
	 	// echo $check = '<br> checkpoint 2 call author and com_code: '.$feed_code.' <br>';

//this is to create a com code
	$rand = generateRandomString();
			#checkString($rand);
			$author = $login_session;
$action = 'replied';
$nature = 'reply';
$item = $reply;
$item_code = $rand;
$place = $feed_code;
$recipient = 'the owner of the feed first, then the owner of the comment and then everyone that replied to this';
notification ($author, $action, $nature, $recipient, $item, $item_code, $place);

//inserting data
$sql = "INSERT INTO feedcomment (`feed_code`, `comment`, `com_code`, `is_child`, `author`, `date`, filename, filetype, filepath, par_code) VALUES 
('$feed_code','$reply', '$rand','1', '$author', '$date', '$file_name','$file_type','$target_Folder$file_name', '$com_code' )";
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

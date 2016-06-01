 <?php
 $recipient = ""
  require('../session.php');
   require '../connect.php';
  function newmessage ($recipient){
	   require('../session.php');
	    require '../connect.php';

//creating table and column var
$table = "privatemessage";
$sendercol = "sender";
// $recipienttbl = "recipient";
$message = "message";
$datetbl = "date";
$filetype = "filetype";
$filename = "filename";
$filepath = "filepath";

  // sql to create table
$sql = "CREATE TABLE $table (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
$sendercol VARCHAR(500) NOT NULL,
$recipient VARCHAR(500) NOT NULL,
$message VARCHAR(500) NOT NULL,
$filetype VARCHAR(500) NOT NULL,
$filename VARCHAR(500) NOT NULL,
$filepath VARCHAR(500) NOT NULL,
$datetbl TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table $table created successfully";
} else {
    echo "Error creating '$table': " . $conn->error;
}
//////////////////////////////////////////////////////////////////////////////
//write/insert on database, you must be already connected to one database, using $conn
//inserting data from html to php
$now = date("Y-m-d H:i:s",time());
$value1 = $login_session;
$value2 = $_POST['post'];
$value3 = $_post['uploadfile'];
$target_Folder = "boardpicture/";
$file_name = $_FILES['uploadfile']['name'];
$file_type = $_FILES['uploadfile']['type'];
//inserting data
$sql = "INSERT INTO $table ($sendercol,$message,$recipient,$datetbl,$filetype,$filename,$filepath) VALUES ('$value1','$value2','$now','$file_type','$file_name','../$target_Folder$file_name' )";
if (mysqli_query($conn, $sql)) {
	//if the picture is uploaded sucessfully,it will be moved inside the container folder
	$target_Path = $target_Folder.basename( $_FILES['uploadfile']['name'] );
$savepath = $target_Path.basename( $_FILES['uploadfile']['name'] );
        move_uploaded_file( $_FILES['uploadfile']['tmp_name'], "../$target_Path" );
    header ('location: ../welcome.php'); 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  }
?>


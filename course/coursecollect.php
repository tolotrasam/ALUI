<?php 
require '../connect.php';
echo '<br> checkpoint<br>';
// require '../../session.php';

  // require_once ('../../comment/functions.php');
  echo 'start here';
  echo $full_name;
  echo '<br>';
  echo $login_session;
  echo '<br>';
  $table = $_GET['platform'];
//phpinfo() this is to create a new database from php;
$type = $_POST['type'];
$assessment = $_POST['assessment'];
$course = $_POST['course'];
$year = $_POST['year'];
$deadline = $_POST['deadline'];
$hour = $_POST['hour'];
$topic = $_POST['topic'];
$title = $_POST['title'];
$description = $_POST['description'];
$duration = $_POST['duration'];
$cohort = $_POST['cohort'];
$privacy = $_POST['privacy'];
$category = $_POST['category'];
$week = $_POST['week'];

$deliverable1 = $_POST['deliverable1'];
$deliverable2 = $_POST['deliverable2'];
$deliverable3 = $_POST['deliverable3'];
$deliverable4 = $_POST['deliverable4'];
$deliverable5 = $_POST['deliverable5'];
$LO1 = $_POST['LO1'];
$descriptionLO1 = $_POST['descriptionLO1'];
$LO2 = $_POST['LO2'];
$descriptionLO2 = $_POST['descriptionLO2'];
$LO3 = $_POST['LO3'];
$descriptionLO3 = $_POST['descriptionLO3'];
$LO4 = $_POST['LO4'];
$descriptionLO4 = $_POST['descriptionLO4'];

$objective1 = $_POST['objective1'];
$objective2 = $_POST['objective2'];
$objective3 = $_POST['objective3'];
$objective4 = $_POST['objective4'];

$overview = $_POST['overview'];


$link1 = $_POST['link1'];
$instruction1 = $_POST['instruction1'];
$duration = $_POST['duration'];
$question = $_POST['question1'];

$link2 = $_POST['link2'];
$instruction2 = $_POST['instruction2'];
$duration2 = $_POST['duration2'];
$question2 = $_POST['question2'];

$link3 = $_POST['$link3'];
$instruction3 = $_POST['$instruction3'];
$duration3 = $_POST['$duration3'];
$question3 = $_POST['$question3'];

$link4 = $_POST['link4'];
$instruction4 = $_POST['instruction4'];
$duration4 = $_POST['duration4'];
$question4 = $_POST['question4'];

$link5 = $_POST['link5'];
$instruction5 = $_POST['instruction5'];
$duration5 = $_POST['duration5'];
$question5 = $_POST['question5'];

$link6 = $_POST['link6'];
$instruction6 = $_POST['instruction6'];
$duration6 = $_POST['duration6'];
$question6 = $_POST['question6'];
$link1title=	$_POST['link1title'];
$link2title=	$_POST['link2title'];
$link3title=	$_POST['link3title'];
$link4title=	$_POST['link4title'];
$link5title=	$_POST['link5title'];
$link6title=	$_POST['link6title'];
$link7title=	$_POST['link7title'];
$link8title=	$_POST['link8title'];
$link9title=	$_POST['link9title'];


$now = date("Y-m-d H:i:s",time());
echo '<br> checkpoint<br>';
//new connection with the previous variables
  // sql to create table
$sql = "CREATE TABLE $table (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
author VARCHAR(30) NOT NULL,
type VARCHAR(30) NOT NULL,
assessment VARCHAR(30) NOT NULL,
course VARCHAR(30) NOT NULL,
year VARCHAR(30) NOT NULL,
deadline VARCHAR(30) NOT NULL,
hour VARCHAR(300) NOT NULL,
topic VARCHAR(300) NOT NULL,
title VARCHAR(300) NOT NULL,
description TEXT(3000) NOT NULL,
duration VARCHAR(30) NOT NULL,
cohort VARCHAR(30) NOT NULL,
category VARCHAR(30) NOT NULL,
week VARCHAR(30) NOT NULL,

 deliverable1 TEXT(900) NOT NULL,
 deliverable2 TEXT (900) NOT NULL,
 deliverable3 TEXT(900) NOT NULL,
 deliverable4 TEXT(900) NOT NULL,
 LO1 TEXT(1000) NOT NULL,
 LO2 TEXT(1000) NOT NULL,
 LO3 TEXT(1000) NOT NULL,
 LO4 TEXT(1000) NOT NULL,
 
 descriptionLO1 TEXT(900) NOT NULL,
 descriptionLO2 TEXT(900) NOT NULL,
 descriptionLO3 TEXT(900) NOT NULL,
 descriptionLO4 TEXT(900) NOT NULL,
 
 objective1 TEXT(900) NOT NULL,
 objective2 TEXT(900) NOT NULL,
 objective3 TEXT(900) NOT NULL,
 objective4 TEXT(900) NOT NULL,
 objective5 TEXT(900) NOT NULL,
 
 overview text(900) NOT NULL,
 link1 VARCHAR(900) NOT NULL,
 instruction1 TEXT(900) NOT NULL,
 question1 TEXT(900) NOT NULL,
 
 link2 VARCHAR(900) NOT NULL,
 instruction2 TEXT(900) NOT NULL,
 question2 TEXT(900) NOT NULL,
 link3 VARCHAR(900) NOT NULL,
 instruction3 TEXT(900) NOT NULL,
 question3 TEXT(900) NOT NULL,
 link4 VARCHAR(900) NOT NULL,
 instruction4 TEXT(900) NOT NULL,
 question4 TEXT(900) NOT NULL,
 link5 VARCHAR(900) NOT NULL,
 instruction5 TEXT(900) NOT NULL,
 question5 TEXT(900) NOT NULL,
 link6 VARCHAR(900) NOT NULL,
 instruction6 TEXT(900) NOT NULL,
 question6 TEXT(900) NOT NULL,
 link7 VARCHAR(900) NOT NULL,
 instruction7 TEXT(900) NOT NULL,
 question7 TEXT(900) NOT NULL,
link1title TEXT (100),
link2title TEXT (100),
link3title TEXT (100),
link4title TEXT (100),
link5title TEXT (100),
link6title TEXT (100),
link7title TEXT (100),
link8title TEXT (100),
link9title TEXT (100),

date TIMESTAMP,
filename VARCHAR(500)  NULL,
filepath VARCHAR(500)  NULL,
filetype VARCHAR(500)  NULL,
coursecode VARCHAR(10)  
)";

if ($conn->query($sql) === TRUE) {
    echo "Table $table created successfully";
} else {
    echo "Error creating '$table': " . $conn->error;
}
echo '<br> checkpoint<br>';
// $rand = generateRandomString();
//inserting data
$rand = generateRandomString();
$sql = "INSERT INTO $table (
author,
type,
assessment,
course,
year,
deadline,
hour,
topic,
title,
description,
duration,
cohort,
category,
week,
deliverable1,
deliverable2,
deliverable3,
deliverable4,
LO1,
LO2,
LO3,
LO4,
descriptionLO1,
descriptionLO2,
descriptionLO3,
descriptionLO4,
objective1,
objective2,
objective3,
objective4,
objective5,
overview,
link1,
instruction1,
question1,
link2,
instruction2,
question2,
link3,
instruction3,
question3,
link4,
instruction4,
question4,
link5,
instruction5,
question5,
link6,
instruction6,
question6,
link7,
instruction7,
question7,
link1title,
link2title,
link3title,
link4title,
link5title,
link6title,
link7title,
link8title,
link9title,

date,
coursecode
) VALUES 
(
'$author',
'$type',
'$assessment',
'$course',
'$year',
'$deadline',
'$hour',
'$topic',
'$title',
'$description',
'$duration',
'$cohort',
'$category',
'$week',
'$deliverable1',
'$deliverable2',
'$deliverable3',
'$deliverable4',
'$LO1',
'$LO2',
'$LO3',
'$LO4',
'$descriptionLO1',
'$descriptionLO2',
'$descriptionLO3',
'$descriptionLO4',
'$objective1',
'$objective2',
'$objective3',
'$objective4',
'$objective5',
'$overview',
'$link1',
'$instruction1',
'$question1',
'$link2',
'$instruction2',
'$question2',
'$link3',
'$instruction3',
'$question3',
'$link4',
'$instruction4',
'$question4',
'$link5',
'$instruction5',
'$question5',
'$link6',
'$instruction6',
'$question6',
'$link7',
'$instruction7',
'$question7',
'$link1title',
'$link2title',
'$link3title',
'$link4title',
'$link5title',
'$link6title',
'$link7title',
'$link8title',
'$link9title',

'$now',
'$rand'
 )";
 echo '<br> checkpoint<br>';
if (mysqli_query($conn, $sql)) {
	//if the picture is uploaded sucessfully,it will be moved inside the container folder
	// $target_Path = $target_Folder.basename( $_FILES['uploadimage']['name'] );
// $savepath = $target_Path.basename( $_FILES['uploadimage']['name'] );
        // move_uploaded_file( $_FILES['uploadimage']['tmp_name'], "../$target_Path" );
		echo 'sucess';
		// header ('Location: welcome.php');
       header ('Location: coursetimeline.php?coursecode='.$rand.'&platform='.$table.''); 
       echo 'Location: coursetimeline.php?coursecode='.$rand.'&platform='.$table.''; 
		
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$characterLength = strlen($characters);
		$randomString = '';

		for($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $characterLength - 1)];
		}
		return $randomString;
	}

?>
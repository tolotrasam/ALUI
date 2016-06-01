<?php
//how to fetch data from database2
  
  require_once ('../comment/functions.php');
require '../connect.php';
  	// echo $check = "checkpoint 1 <br>";
$coursetimeline = $_GET['course'];
 $code = $_GET['code'];
// echo 'CP1<br>';

// echo $coursetimeline;
//table variables
$table = "newfeed";
//column
$username_tbl = "username";
$posttbl = "post";
$datetbl = "date";
//special selection
$now = date("Y-m-d H:i:s",time());
	if (isset ($code)){
	 $condition = 'and feed_code= \''.$code.'\'';}
		if (empty ($code)){
		$condition = '';}
if (isset($coursetimeline)){
		
	// echo $check;
	 // $sql="SELECT * FROM $table where $datetbl < $now ORDER BY $datetbl DESC limit 30";
  $sql="SELECT * FROM $table where course = '$coursetimeline'  $condition order by date desc";
   // where id = (SELECT max(id) FROM $table)
	}
		
 
 if (empty($coursetimeline)){
	 // echo $check;
	  // $sql="SELECT * FROM $table where $datetbl < $now ORDER BY $datetbl DESC limit 30";
  $sql="SELECT * FROM $table where id > 0 $condition order by date desc";
   // where id = (SELECT max(id) FROM $table)
 }
 
 
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	// echo $check;
        $username = $row[$username_tbl];
		$authorfeed = $row[author];
		$title = $row[title];
		$post = $row[$posttbl];
		$audience = $row[audience2];
		$type = $row[type];
		$course = $row[course];
		$date = $row [$datetbl];
		$id = $row [id];
		$imagename = $row[filename];
		$imagepath = $row[filepath];
		$feed_code = $row[feed_code];
		$linkeditem = $row[linkeditem];
		$author= $login_session;
		$linkpath =0;
		
		// echo "<p>$username posted: </p><p> $post.</p>at $date" ;
echo '<div class="feed" id = "'.$feed_code.'">'; 
echo '<div class="wrapfeed"><img class = "feedpicture" width="40px" height="40px" src="http://cashy.s3.amazonaws.com/images%2Farticles%2Fcontributors%2Fdisplay%2Fuser-icon-silhouette-dd6c3d8c7e5dee8f722747875be985e7.png">';
echo '<div class = "feedheader"><h2 class="author">'.$authorfeed.' posted to >>> '.$audience.':</h2><p class="date"> at '.$date.'</p></div>';
echo '</h5><a id="courselink" target = "_new" href = "course/coursetimeline.php?coursecode='.$linkeditem.'&platform=course" ><span class = "icon icon-eye quickstart"> I\'m ready</span></a>';
echo '<div class="feedtype">'.$type.': '.$course.'</div>';
echo '<b><h5 class = "feed-title">'.$title.'</h5></b>';
echo '<p>'.$post.'</p></div>';
echo '<img class = "image-feed" id = "image-'.$feed_code.'"src="'.$imagepath.' " alt="'.$imagename.'" style="width: 100% ;" onerror="this.style.display=\'none\'"></img>';
// echo $feed_code;
  	// echo $check = "<br> checkpoint 2 <br>";
   get_comments ($feed_code, $author);

	  }
} else {
    echo "0 results";
}
// echo '<link rel="stylesheet" href="../comment/styles.css" />';
?>

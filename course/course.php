<?php
echo '<br> checkpoint<br>';
require '../connect.php';
echo '<br> checkpoint<br>';


//table variables
$table = "course";
//column
$now = date("Y-m-d H:i:s",time());
 	 // echo $check;
	  // $sql="SELECT * FROM $table where $datetbl < $now ORDER BY $datetbl DESC limit 30";
  $sql="SELECT * FROM $table order by date desc limit 1";
   // where id = (SELECT max(id) FROM $table)
 echo '<br> checkpoint3<br>';

  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	// echo $check;
	echo '<br> checkpoint4<br>';

      
		$title = $row[title];
		$author=	$row[author];
$type=	$row[type];
$assessment=	$row[assessment];
$course=	$row[course];
$year=	$row[year];
$deadline=	$row[deadline];
$hour=	$row[hour];
$topic=	$row[topic];
$title=	$row[title];
$description=	$row[description];
$duration=	$row[duration];
$cohort=	$row[cohort];
$category=	$row[category];
$week=	$row[week];
$deliverable1=	$row[deliverable1];
$deliverable2=	$row[deliverable2];
$deliverable3=	$row[deliverable3];
$deliverable4=	$row[deliverable4];
$LO1=	$row[LO1];
$LO2=	$row[LO2];
$LO3=	$row[LO3];
$LO4=	$row[LO4];
$descriptionLO1=	$row[descriptionLO1];
$descriptionLO2=	$row[descriptionLO2];
$descriptionLO3=	$row[descriptionLO3];
$descriptionLO4=	$row[descriptionLO4];
$objective1=	$row[objective1];
$objective2=	$row[objective2];
$objective3=	$row[objective3];
$objective4=	$row[objective4];
$link1=	$row[link1];
$instruction1=	$row[instruction1];
$question1=	$row[question1];
$link2=	$row[link2];
$instruction2=	$row[instruction2];
$question2=	$row[question2];
$link3=	$row[link3];
$instruction3=	$row[instruction3];
$question3=	$row[question3];
$link4=	$row[link4];
$instruction4=	$row[instruction4];
$question4=	$row[question4];
$link5=	$row[link5];
$instruction5=	$row[instruction5];
$question5=	$row[question5];
$link6=	$row[link6];
$instruction6=	$row[instruction6];
$question6=	$row[question6];
$link7=	$row[link7];
$instruction7=	$row[instruction7];
$question7=	$row[question7];
$date=	$row[date];
$coursecode=$row[coursecode];


	}}
?>
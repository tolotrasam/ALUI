<?php
//echo '<br> checkpoint<br>';
require '../connect.php';
//echo '<br> checkpoint<br>';
$coursecode = $_GET['coursecode'] ;
if (isset($coursecode)) {
// echo '<br>checkpoint';
//table variables
$table = $_GET["platform"];
$mycohort = "B3";
//column
$now = date("Y-m-d H:i:s",time());
 	 // echo $check;
	  // $sql="SELECT * FROM $table where $datetbl < $now ORDER BY $datetbl DESC limit 30";
  $sql="SELECT * FROM $table where coursecode = '$coursecode' limit 1";
  
   // where id = (SELECT max(id) FROM $table)
//echo '<br> checkpoint3<br>';
}
if (empty($coursecode)) {
echo 'no course courses selected';
die;
}
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	// echo $check;
//	echo '<br> checkpoint4<br>';

      
		$title = $row[title];
		$goal = $row[goal];
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
$overview=	$row[overview];
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

$link1title=	$row[link1title];
$link2title=	$row[link2title];
$link3title=	$row[link3title];
$link4title=	$row[link4title];
$link5title=	$row[link5title];
$link6title=	$row[link6title];
$link7title=	$row[link7title];
$link8title=	$row[link8title];
$link9title=	$row[link9title];


$date=	$row[date];
$coursecode=$row[coursecode];

	}}else{
		echo 'no course found';
		die;
	}
?>
<head>
	<title>Tolotra Course Timeline</title>
	<link rel="stylesheet" href="css/style.css" media="screen" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/jquery.timelinr-0.9.6.js"></script>
	<script>
		$(function(){
			$().timelinr({
				arrowKeys: 'true'
			})
		});
	</script>
     
     
        <script type="text/javascript" src="inc/TimeCircles.js"></script>
        <link rel="stylesheet" href="inc/TimeCircles.css" />
	 
<style type="text/css">
body{
    margin:0px;
    background: #F0F0F0;
	color: black
}
.header-cont {
    width:100%;
    position:fixed;
    top:-200px;
	z-index: -1;
}
.title, .subject {
float: left;
background-color: #673AB7}

.learningoutcomes{
clear: left;
width: 50%;
background-color: #FCFCFC;
height: 30%;
}
.header {
    height:245px;
    background:#FFFFFF;
    border:1px solid #CCC;
    width:70%;
    margin:0px auto;
	
}
.content {
    width:70%;
    background: white;
    border: 1px solid #CCC;
    height: 2000px;
    margin: 90px auto;
}
	.rightpanel, .leftpanel{
	border: 1px solid #CCC;
	position: fixed;
	right: 0;
	top: 0;
	height: 1000px;
	width: 13%;
	 background: white;	
	 border: 1px solid #CCC;
	position: fixed;
	 z-index: 999;
	top: 0;
	height: 1000px;
		 background: white;}
	  .leftpanel { left: 0; 
	 }
	 # {
	 position: absolute;
	 bottom: 5px;
	 right: 5px;
	 width: 30px;
	 }
	 table {
	 border-collapse: collapse;
	 border-color: #FCFCFC}
	 hr{
	 border-bottom: 2px solid #CFCFCF}
	 textarea.note {
	 width: 100%;
	 height: 400px}
	  .note input {
	  float: right}
</style>
</head>
<body>
 <div class="header-cont">
     <div class = "header"> 
<div class="container"> 

            <br><br>
			<div class = "duration" style = "float:left">
	Suggested duration: <br><?php echo $duration?></div>
            <h2>Counting down <?php echo $duration?></h2>
            <div id="CountDownTimer" data-timer="4900" ></div>
            <button class="btn btn-success startTimer">Start Timer</button>
            <button class="btn btn-danger stopTimer">Stop Timer</button>
            

</div>	
		<div class = "learningoutcomes">
		
				<?php echo $LO1?>
		
		</div>
		<br>
</div>
		<ul id="dates">
			<li><a href="#1900">Overview </a></li>
			<li><a href="#1930"><?php echo $link1title?></a></li>
			<li><a href="#1944"><?php echo $link2title?></a></li>
			<li><a href="#1950"><?php echo $link3title?></a></li>
			<li><a href="#1971"><?php echo $link4title?></a></li>
			<li><a href="#1977"><?php echo $link5title?></a></li>
			<li><a href="#1989"><?php echo $link6title?></a></li>
			<li><a href="#1999"><?php echo $link7title?></a></li>
			<li><a href="#2001"><?php echo $link8title?></a></li>
			<li><a href="#2011"><?php echo $link9title?></a></li>
		</ul>

	
</div>

 <div class = "rightpanel">
 
<div class = "title">
		<h1>Title:<?php echo  $title; ?></h1>
		</div>
		<div class = "subject">
		<h2> Subject:<?php echo $course; ?></h2>
		</div>
	<div class = "goal" style = "float:left">
	 <?php echo $goal ?>
	<?php echo $objective1?>
	
	</div>
	
		<br>
	<hr>
</div> 
<div class = "leftpanel">
<form class =  "note"  name = "note">
	<textarea class = "note" width = "100%" height = "500px" placeholder = "write your note here and save and/or share..." value  ="<?php $note?>"></textarea>
	<input type = "submit" value = "save">
	<input type = "button" value = "share">
	</form>
	<div class = "leftnav">
	<ul id="dates">
			<li><a href="#1900">Overview </a></li>
			<li><a href="#1930"><?php echo $link1title?></a></li>
			<li><a href="#1944"><?php echo $link2title?></a></li>
			<li><a href="#1950"><?php echo $link3title?></a></li>
			<li><a href="#1971"><?php echo $link4title?></a></li>
			<li><a href="#1977"><?php echo $link5title?></a></li>
			<li><a href="#1989"><?php echo $link6title?></a></li>
			<li><a href="#1999"><?php echo $link7title?></a></li>
			<li><a href="#2001"><?php echo $link8title?></a></li>
			<li><a href="#2011"><?php echo $link9title?></a></li>
		</ul>
		</div>
<div class = "goal" style = "float:left">
<div class = "deadline">
Deadlines:
<table border = "1px">
<tr>
<th>Cohort</th>
<th>Time</th>
<th>Left</th>

</tr>
<tr>
<td><?php echo $mycohort?></td>
<td><?php echo $deadline?></td>
<td><?php echo $deadlineleft?></td>
<td></td>
</tr>
<tr>
<td><?php echo $mycohort?></td>
<td><?php echo $deadline?></td>
<td><?php echo $deadlineleft?></td>
<td></td>
</tr>

</table>

</div>
</div>
	
	<br>
	<hr>

	<style>
.mce-tinymce {
border: 1px;
width: 100%}
.leftnav ul#dates {
	all:initial;
	font-size: 16px;

   list-style-type: disc; 
   list-style-position: inside; 

}
.leftnav #dates li {
 
       float: left;
    width: 200px;
    height: 40px;
    font-size: 16px;
    text-align: center;
    background: none;
    line-height: 44%;
    list-style-type: disc;
    list-style-position: inside;
	overflow: hidden;
}
.leftnav #dates a {
    line-height: 17px;
    padding-bottom: 10px;
}
.leftnav #dates .selected {
    font-size: 16px;
}
</style>
<script src='//cdn.tinymce.com/4/tinymce.min.js'></script>

<script>
tinymce.init({
  selector: 'textarea',
  menubar: false,
  <!-- inline: true, -->
  height: 250,
  widht: 100,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    <!-- 'searchreplace wordcount visualblocks visualchars code fullscreen', -->
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools'
  ],
  toolbar1: ' bold italic alignleft aligncenter  bullist | numlist outdent indent link ',
  toolbar2: ' preview forecolor backcolor emoticons',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
 //input now
 </script>
</div>

<div class = "content">
				<input type = "button" class = "clicked" value = "develop" id = "reduce"/>

<script>
$('#reduce').click(function(){
    if($(this).hasClass("clicked")){
        $(this).removeClass("clicked");
        $(this).val("reduce");
        $('.header-cont').animate({top: "+=200px"});
	 $(".content").animate({'margin-top': "300px"});
   // $('.portlet-msg-error:first').css({'margin-top':'70px'});
    }else{
        $(this).addClass("clicked");
        $(this).val("develop");
    $('.header-cont').animate({top: "-=200px"});
		 $(".content").animate({'margin-top':  "90px"});
    }
});

</script>
<script src = "js/mainclock.js"> </script>  
<script>
//create new document target inside iframe
    function showlink() {
        var link = $('#start').attr('src');
        alert(link);
    }
</script>
<div id="timeline">
	<div id="issues">
			<li class = "step"id="1900">
				<!-- <img src="images/1.png" width="256" height="256" /> -->
				<h1>Overview</h1>
			
				<iframe width="100%" height="792" src="<?php echo $overview?>" frameborder="0" allowfullscreen id = "start" name = "overview"></iframe>
	
			</li>
			<li class = "step"id="1930">
				<!-- <img src="images/2.png" width="256" height="256" /> -->
				<h1><?php echo $link1title ?></h1>
				<div class = "content-link">
				<?php echo $instruction1?>
				</div>
				<div class = "content-link">
				<?php echo $question1?>
				</div>
				
				<iframe name = "start" src="www.facebook.com" width="100%" onError= "this.style.display='none'" height="1000" ></iframe>
				<a href = "https://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_webhttps://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_web" target = "start1"><input type = "button" value =  "start now" /></a>
				<iframe width="100%" height="1000" src="<?php echo $link1?>" onError= "this.style.display='none'" frameborder="0" allowfullscreen id = "start" name = "start1"><?php echo $link1?></iframe>
			</li>
			
			
			<li class = "step"id="1944">
				<img src="images/3.png" width="256" height="256" />
			<!-- <img src="images/2.png" width="256" height="256" /> -->
				<h1><?php echo $link2title ?></h1>
				<div class = "content-link">
				<?php echo $instruction2?>
				</div>
				<div class = "content-link">
				<?php echo $question2?>
				</div>
				
				<iframe width="100%" height="1000" src="<?php echo $link2?>" frameborder="0" allowfullscreen id = "start" name = "start2"><?php echo $link2?></iframe>
 <a href = "https://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_webhttps://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_web" target = "start2"><input type = "button" value =  "start now" /></a>
 <iframe name = "start2" width="100%" height="1000" ></iframe>

			</li>
			
			
			<li class = "step"id="1950">
				<!-- <img src="images/4.png" width="256" height="256" /> -->
					<h1><?php echo $link3title ?></h1>
				<div class = "content-link">
				<?php echo $instruction3?>
				</div>
				<div class = "content-link">
				<?php echo $question3?>
				</div>
				
				<iframe width="100%" height="1000" src="<?php echo $link3?>" frameborder="0" allowfullscreen id = "start" name = "start3"><?php echo $link3?></iframe>
 <a href = "https://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_webhttps://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_web" target = "start3"><input type = "button" value =  "start now" /></a>
 <iframe name = "start3" width="100%" height="1000" ></iframe>
			</li>
			<li class = "step"id="1971">
				<!-- <img src="images/5.png" width="256" height="256" /> -->
				
					<h1><?php echo $link3title ?></h1>
				<div class = "content-link">
				<?php echo $instruction3?>
				</div>
				<div class = "content-link">
				<?php echo $question3?>
				</div>
				
				<iframe width="100%" height="1000" src="<?php echo $link3?>" frameborder="0" allowfullscreen id = "start" name = "start4"><?php echo $link3?></iframe>
 <a href = "https://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_webhttps://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_web" target = "start4"><input type = "button" value =  "start now" /></a>
 <iframe name = "start4" width="100%" height="1000" ></iframe>
			</li>
			<li class = "step"id="1977">
				<!-- <img src="images/6.png" width="256" height="256" /> -->
					<h1><?php echo $link4title ?></h1>
				<div class = "content-link">
				<?php echo $instruction4?>
				</div>
				<div class = "content-link">
				<?php echo $question4?>
				</div>
				
				<iframe width="100%" height="1000" src="<?php echo $link4?>" frameborder="0" allowfullscreen id = "start" name = "start4"><?php echo $link4?></iframe>
 <a href = "https://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_webhttps://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_web" target = "start5"><input type = "button" value =  "start now" /></a>
 <iframe name = "start5" width="100%" height="1000" ></iframe>
			</li>
			<li class = "step"id="1989">
				<!-- <img src="images/7.png" width="256" height="256" /> -->
					<h1><?php echo $link5title ?></h1>
				<div class = "content-link">
				<?php echo $instruction5?>
				</div>
				<div class = "content-link">
				<?php echo $question5?>
				</div>
				
				<iframe class = "empty" width="100%" height="1000" src="<?php echo $link5?>" frameborder="0" allowfullscreen id = "start" name = "start5"><?php echo $link5?></iframe>
				  <script type="text/javascript"> 
   $(function() {
        $('.empty').load(function() {            
          if($.trim($(this).contents().find("body").html()) == "") {
            $(this).hide();
          }
        });
    });
   </script>
   
 <a href = "https://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_webhttps://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_web" target = "start6"><input type = "button" value =  "start now" /></a>
 <iframe name = "start5" width="100%" height="1000" ></iframe>
			</li>
			<li class = "step"id="1999">
				<!-- <img src="images/8.png" width="256" height="256" /> -->
					<h1><?php echo $link6title ?></h1>
				<div class = "content-link">
				<?php echo $instruction6?>
				</div>
				<div class = "content-link">
				<?php echo $question6?>
				</div>
				
				<iframe width="100%" height="1000" src="<?php echo $link6?>" frameborder="0" allowfullscreen id = "start" name = "start6"><?php echo $link6?></iframe>
 <a href = "https://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_webhttps://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_web" target = "start6"><input type = "button" value =  "start now" /></a>
 <iframe name = "start6" width="100%" height="1000" ></iframe>
			</li>
			<li class = "step"id="2001">
				<!-- <img src="images/9.png" width="256" height="256" /> -->
					<h1><?php echo $link7title ?></h1>
				<div class = "content-link">
				<?php echo $instruction7?>
				</div>
				<div class = "content-link">
				<?php echo $question7?>
				</div>
				
				<iframe width="100%" height="1000" src="<?php echo $link7?>" frameborder="0" allowfullscreen id = "start" name = "start7"><?php echo $link7?></iframe>
 <a href = "https://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_webhttps://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_web" target = "start7"><input type = "button" value =  "start now" /></a>
 <iframe name = "start7" width="100%" height="1000" ></iframe>
			</li>
			<li class = "step"id="2011">
				<!-- <img src="images/10.png" width="256" height="256" /> -->
					<h1><?php echo $link8title ?></h1>
				<div class = "content-link">
				<?php echo $instruction8?>
				</div>
				<div class = "content-link">
				<?php echo $question8?>
				</div>
				
				<iframe width="100%" height="1000" src="<?php echo $link8?>" frameborder="0" allowfullscreen id = "start" name = "start8"><?php echo $link8?></iframe>
 <a href = "https://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_webhttps://docs.google.com/document/u/0/create?zx=qbddec4oxj73&usp=docs_web" target = "start8"><input type = "button" value =  "start now" /></a>
 <iframe name = "start8" width="100%" height="1000" ></iframe>
			</li>
		</div>
	<!-- 	<div id="grad_left"></div>
		<div id="grad_right"></div> -->
		<a href="#" id="next">+</a>
		<a href="#" id="prev">-</a>
	</div>
	
	<h1>ALUiDynamic - TolotraNEt @Tolotra Corporation <a href="http://www.csslab.cl/2011/08/18/jquery-timelinr/" title="Volver al artículo original">ALU</a></h1>
	<h2>2016</h2>
</div>
</body>
</html>

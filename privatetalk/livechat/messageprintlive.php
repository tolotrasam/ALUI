<html>
<link  rel="stylesheet" type="text/css" href = "messageprintlive_style/messageprintlive.css" onload = "bottomscroll()">
<section class = "warp" >
 <header class="top-header" effect="<?php $connection = $_GET['contact']; echo ''.$connection.''?>">

      <div class='left'>

        <span class='icon typicons-senderssage'></span>

        
<?php
 require ('../../session.php');
 require '../../connect.php';
 
 // echo $string1 = "checkpoint2";
// echo $login_session;
//how to fetch data from database2

  // echo $string1 = "checkpoint3";

$try1 = ''.$login_session.''.$connection.'';
$try2 = ''.$connection.''.$login_session.'';
	$sql="SELECT * from conversation where conversation_name = '$try1' or conversation_name = '$try2' limit 1";
$result = $conn->query($sql);
// echo $string1 = "checkpoint4";
if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
		    $tablemessage = $row['conversation_name'];
}}else {
	 echo $newmessage =  'New message to: '; 
	// $tablemessage = "none";
	// mysqli_close($conn);
}
  //connected form here
  //fetch the last conversation of the logged session
   $sql="SELECT * from conversation where participant2 = '$login_session ' or participant1 = '$login_session' order by date desc limit 1";
$result = $conn->query($sql);
// echo $string1 = "checkpoint4";
      while($row = $result->fetch_assoc()) {
        $date = $row["date"];
		$lastconversation = $row ["conversation_name"];
	  // echo $date;
      // echo $lastconversation;
// echo $string1 = "checkpoint5 <br>";
}

    // if (isset($_GET['tablemessage'])){
// $tablemessage = $_GET['tablemessage'];}
 // if (empty($_GET['tablemessage'])){$tablemessage = $lastconversation;}
 
    //effect attributes to icons
	if (isset ($tablemessage)){$sql="SELECT * from conversation where conversation_name = '$tablemessage'";
$result = $conn->query($sql);
      while($row = $result->fetch_assoc()) {
        $participant1 = $row["participant1"];
		$participant2 = $row ["participant2"];
		
		if ($login_session == $participant1){
			$effect = $participant2;
		}
		if ($login_session == $participant2){
			$effect = $participant1;
	  }}
	if (empty ($tablemessage)){$first = 'Be the first to send message to '.$connection.'';};
// echo $string1 = "checkpoint4";
	  // echo $date;
      // echo $lastconversation;
// echo $string1 = "checkpoint5 <br>";
}

	 echo '<span class="top-header-tit" >'.$effect.'</span>';
     echo  '</div>';
     echo ' <div class="right">';
      echo '<span class="icon typicons-minus" id = "reduce" effect = "'.$connection.'" ></span>';
      echo '<span class="icon iconicstroke-x" id = "delete" effect = "'.$connection.'" ></span>';
      echo '<span class="icon typicons-tisenders"></span>';
?>
      </div>
    </header>
<div class="setting">

     <div class='left'>

      <span class='fontawesosender-facetisender-video'></span>

      <span class='iconicstroke-user'></span>

    </div>

    <div class='right'>

      <span class='typicons-cog'></span>

    </div>

  </div>
<?php
	echo '<ol class= "chatbox" id = "chatbox" style = "overflow-y: auto	">';
// echo $string1 = "checkpoint1 <br>";
// $sql2 = "CREATE TABLE table1 (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// empty VARCHAR (500) NOT NULL)";
// echo $string1 = "checkpoint6 <br>";
// echo $tablemessage;
	if (isset ($tablemessage)){ $sql="SELECT * FROM $tablemessage ORDER BY id asc";;};
	if (empty ($tablemessage)){echo 'Be the first to send message to '.$connection.'';};
 
$result = $conn->query($sql);
// output data of each row
    while($row = $result->fetch_assoc()) {
        $sender = $row["sender"];
        $recipient = $row["recipient"];
		$date = $row["date"];
		$seen = $row["seen"];
	$message = $row["message"];
	$conversation_name = $row["conversation_name"];
	 if ( strtolower($login_session) == strtolower($sender)){
echo '<li class = "sender" ><div class = "avatar-icon"><img width = "40px" height = "40px" src = "http://cashy.s3.amazonaws.com/images%2Farticles%2Fcontributors%2Fdisplay%2Fuser-icon-silhouette-dd6c3d8c7e5dee8f722747875be985e7.png"></div><div class = "message-text"><h4 class = " sendername">'.$sender.'</h4><p>'.$message.'</p><tisender class="date">'.$date.'</tisender><h5>seen</h5></div></li>';
		};
		if ( strtolower($recipient) == strtolower($login_session)) {
echo '<li class = "recipient" ><div class = "avatar-icon"><img width = "40px" height = "40px" src = "http://cashy.s3.amazonaws.com/images%2Farticles%2Fcontributors%2Fdisplay%2Fuser-icon-silhouette-dd6c3d8c7e5dee8f722747875be985e7.png"></div><div class = "message-text"><h4 class = " recipientname">'.$sender.'</h4><p>'.$message.'</p><tisender class="date">'.$date.'</tisender><h5>seen</h5></li>';
	}
	}
$conn->close();
	echo '</ol></section>';
?>
<script src="../jquery.min.js"></script>

<script>

// icon effects directed to parent
//remove div
    $("#delete").click(function(){
	var id = $(this).attr('effect');
	//alert(id);
	parent.closeminitext(id);
	});
	
	//reduce div
	    $("#reduce, .top-header").click(function(){
	var id = $(this).attr('effect');
	// alert(id);
	parent.toggleminitext(id);
	});
	
</script>
<script>
//this scroll the div chatbox at the bottom
				// $(window).load(bottomscroll);
				// $(document).ready(bottomscroll);
				
function bottomscroll (){
// alert ('bottom scroll');
				$("chatbox").prop({ scrollTop: $("chatbox").prop("scrollHeight") });
				var element = document.getElementById("chatbox");
element.scrollTop = element.scrollHeight;
;}
</script>
   </html>
	
	

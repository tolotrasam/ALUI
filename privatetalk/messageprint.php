<html>
<head>
<meta http-equiv="refreshes" content="">
</head>
<?php
ob_start();
	echo '<div class = "warp"><div id= "chatbox">';
// echo $string1 = "checkpoint1 <br>";
 require ('../session.php');
  require '../connect.php';

// echo $string1 = "checkpoint2";
// echo $login_session;

  // echo $string1 = "checkpoint3";

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
 if (isset($_GET['tablemessage'])){
$tablemessage = $_GET['tablemessage'];}
 if (empty($_GET['tablemessage'])){$tablemessage = $lastconversation;}
// echo $string1 = "checkpoint6 <br>";
// echo $tablemessage;
  $sql="SELECT * FROM $tablemessage ORDER BY id asc";
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
echo '<div class = "sender" ><div><h4 class = " sendername">'.$sender.'</h4>'.$message.'<div class="date">'.$date.'</div><h4>seen</h4></div>';
		}
		if ( strtolower($recipient) == strtolower($login_session)) {
echo '<div class = "recipient" ><h4 class = " recipientname">'.$sender.'</h4>'.$message.'<div class="date">'.$date.'</div><h4>seen</h4></div>';
	}
	}
$conn->close();
	echo '</div></div>';
?>
<style>
body {overflow: scroll;}
.sender {text-align: right;}
.recipient{text-align: left;}
#chatbox{ overflow:auto;
			max-height: 100%;
  vertical-align: bottom;
  position: relative;
  width: 100%;
background-color: ;
position: absolute;
bottom: 0;
}
.warp {position: relative;
bottom:0;
height: 100%;
width: 100%;}

</style>
<script src="jquery.min.js"></script>
<script>
//this scroll the div chatbox at the bottom
				$("chatbox").prop({ scrollTop: $("chatbox").prop("scrollHeight") });
				var element = document.getElementById("chatbox");
element.scrollTop = element.scrollHeight;
</script>
   </html>
    <?php 
        $html_output = ob_get_contents();
        ob_end_clean();
        echo $html_output;
    ?>

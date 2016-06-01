<?php
echo "<div class='header-inbox'> New messages ()</div>";
    require('../session.php');
 require '../connect.php';
  // echo $string = "checkpoint 1";

  $sql="SELECT * from conversation where participant2 = '$login_session ' or participant1 = '$login_session' order by date desc";
$result = $conn->query($sql);

    // output data of each row
    while($row = $result->fetch_assoc()) {
        $participant1 = $row["participant1"];
        $participant2 = $row["participant2"];
		$date = $row["date"];
		$seen = $row["seen"];
	$lastmessage = $row["lastmessage"];
	$conversation_name = $row["conversation_name"];
	 if ( strtolower($login_session)== strtolower($participant2 )){
echo '<div class = "inboxwrap" address="'.$participant1.'" link="privatetalk/livechat/livechat.php?tablemessage='.$conversation_name.'&contact='.$participant1.'" onclick = "changeText(\''.$participant1.'\')" href = "tablemessage='.$conversation_name.'"target = "targetframe" ><div class="thumbnail"><img src = "http://cashy.s3.amazonaws.com/images%2Farticles%2Fcontributors%2Fdisplay%2Fuser-icon-silhouette-dd6c3d8c7e5dee8f722747875be985e7.png" width = "40px" height = "40px"></img></div><div class= "msgflisttext"><div class = "inbox"><span class = "lastsender"><b>'.$participant1.'</b></span><br><span>'.$lastmessage.'</span><div class="date">'.$date.'</div><span>'.$seen.'</span></div></div></div>';
		}
		if ( strtolower($participant1) == strtolower($login_session)) {
echo '<div class = "inboxwrap"  address="'.$participant2.'" link="privatetalk/livechat/livechat.php?tablemessage='.$conversation_name.'&contact='.$participant2.'" onclick = "changeText(\''.$participant2.'\')" href = "tablemessage='.$conversation_name.'"target = "targetframe" ><div class="thumbnail"><img src = "http://cashy.s3.amazonaws.com/images%2Farticles%2Fcontributors%2Fdisplay%2Fuser-icon-silhouette-dd6c3d8c7e5dee8f722747875be985e7.png" width = "40px" height = "40px"></img></div><div class= "msgflisttext"><div class = "inbox"><span class= "lastsender"><b>'.$participant2.'</b></span><br><span class = "">You:</span><span> '.$lastmessage.'</span><div class="date">'.$date.'<span>'.$seen.'</span></div></div></div></div>';
	}
	}
	
$conn->close();
?>

<style>
.inboxwrap{
	border-bottom: 2px solid #CCCCCC;
	clear: both;
	height:70px;
}
.inboxwrap:hover {
	background-color: rgba(138, 255, 254, 0.72);
	cursor: hand;
}
.header-inbox{
	border-bottom: 2px solid #CCCCCC;
	clear: both;

}
	.chatlistcontainer {
		clear: both;
		height: 50px;
		float: left;
		width: auto%;
		}
			.thumbnail {margin: 7;
						float: left;
						padding: 3px;
						position: relative;			
			}
			.msgflisttext {
				padding: 0 5;
				white-space:;
				float: left;
				width:15;
			}
				.inbox {
					width: 330px;
					line-height: 25px;
					padding-top:0px;
				}
				.lastsender {	
					color: blue;
					white-space: ;
					overflow: hidden;
					#width:100px;
					float: left;
					text-overflow: ;
				}
				.action{
					white-space:;
					text-overflow: ellipsis; 
					 }
	.greenbubble {
		float: right;
		margin: 5 5;
	}
			
</style>

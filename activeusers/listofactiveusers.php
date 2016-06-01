<?php
require '../session.php';
require '../connect.php';
// echo 'checkpoint1';
// echo $check = '<br>checkpoint1<br>';
/* echo "Connected successfully i Tolokely";
 */
 //setting two dates as interval by substracting one by a duration
 $expire_stamp = date('Y-m-d H:i:s', strtotime("-2 sec"));
//echo '<br>';
 $now_stamp    = date("Y-m-d H:i:s");
//echo '<br>';
//selective query by interval of date
 $result = $conn->query("SELECT * FROM loginlist1 order by lastseen desc");
	// echo 'checkpoint1';
if ($result->num_rows > 0) {
	// echo $check = '<br>checkpoint2<br>';
    // output data of each row
	foreach($result as $row) {
	 $lastseen = $row["lastseen"];
	$activeuser = $row["username"];
	$first_name = $row["first_name"];
	$last_name = $row["last_name"];
	$emotion = "happy";
	 $database = "message";
		$full_name_active = ''.$first_name.' '.$last_name.'';
		if (($lastseen <= $now_stamp && $lastseen >= $expire_stamp)) {
	  	// echo $check == '<br>checkpoint3 the list of active users: '.$activeuser.'<br>';
 //newconnection for getting the conversation link
 	$check = '<br>checkpoint4: connected on database message<br>';
	// echo $activeuser;
	// echo '<br>';
		   echo '<div class = "warplist">';
		   echo '<div class = "chatlistcontainer">';
		   echo '<div class = "thumbnail">';
		   echo '<img width = "40px" height = "40px" src = "https://cashy.s3.amazonaws.com/images%2Farticles%2Fcontributors%2Fdisplay%2Fuser-icon-silhouette-dd6c3d8c7e5dee8f722747875be985e7.png"></img>';
		   echo'</div>';
		   echo'<div class = "chatlisttext">';
		   echo '<div class = "linkfloat" address = "'.$activeuser.'" link = "privatetalk/livechat/livechat.php?tablemessage='.$conversation_name.'&contact='.$activeuser.'"> '.$full_name_active.'</div>';
		   echo ' <div class = "emotion">&nbsp is '.$emotion.' </div> ';
		   echo '<span class = "greenbubble"><img src = "../activeusers/img/shortcode-green-dot.png"></img></span>';
		   echo'</div></div>';
		echo'</div>'; }
		//inactive users
		if (($lastseen < $expire_stamp)){

		   echo '<div class = "warplist">';
		   echo '<div class = "chatlistcontainer">';
		   echo '<div class = "thumbnail">';
		   echo '<img src = "https://cashy.s3.amazonaws.com/images%2Farticles%2Fcontributors%2Fdisplay%2Fuser-icon-silhouette-dd6c3d8c7e5dee8f722747875be985e7.png" width = "40px" height = "40px"></img>';
		   echo'</div>';
		   echo'<div class = "chatlisttext">';
		   echo '<div class = "linkfloat" address = "'.$activeuser.'" link = "privatetalk/livechat/livechat.php?tablemessage='.$conversation_name.'&contact='.$activeuser.'"> '.$full_name_active.'</div>';
		   echo ' <div class = "emotion">&nbsp is '.$emotion.' </div></div> ';
		   echo'</div>';
		echo'</div>';}
		   
	  }
}else{ echo "no active users<br>";}
?>
	
<style>
.warplist{
	border-bottom: 2px solid #CCCCCC;
	clear: both;
	height:50px;
}
.warplist:hover {
	background-color: white;
	cursor: hand;
}
	.chatlistcontainer {
		clear: both;
		height: 50px;
		float: left;
		width: auto%;
		}
			.thumbnail {clear: both;
						float: left;
						padding: 3px;
						position: relative;			
			}
			.chatlisttext {
				padding: 13px;
				white-space:nowrap;
				float: left;
			}
				.linkfloat {	
					color: blue;
					white-space: nowrap;
					overflow: hidden;
					width:60px;
					float: left;
					text-overflow: ellipsis;
				}
				.emotion{
					white-space:nowrap;
					 text-overflow: ellipsis; 
					 float:left;
			}
			
	.greenbubble {
		float: right;
		margin: 5 5;
	}
			
</style>

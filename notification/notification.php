<?php
   include('../connect.php');

 // $sql = "SELECT * FROM `feedcomment` WHERE `com_code` IN (".implode(',',$feed_code).")";
 $sql = "SELECT * FROM event order by id desc ";
	  // echo 'checkoint 2';
 $result = $conn->query($sql);
 $notificationcount = mysqli_num_rows($result);
 	  // echo 'checkoint 2<br>';
	  echo '<div class = header-notif>Recent notifications ('.$notificationcount.')</div>'; 
  while($row = $result->fetch_assoc()) {

    $author = $row['author'];
    $action = $row['action'];
    $item = $row['item'];
    $date = $row['date'];
    $place = $row['place'];
    $nature = $row['nature'];
	$now = date("Y-m-d H:i:s",time());
	 
		   
		   echo '<div class = "a-notif" href = "'.$place.'" ><div class = "warpnotif">';
		   echo '<div class = "chatlistcontainer">';
		   echo '<div class = "thumbnail">';
		   echo '<img src = "http://cashy.s3.amazonaws.com/images%2Farticles%2Fcontributors%2Fdisplay%2Fuser-icon-silhouette-dd6c3d8c7e5dee8f722747875be985e7.png" width = "40px" height = "40px"></img>';
		   echo'</div>';
		   echo'<div class = "notiflisttext">';
		   echo '<div class = "texttrim">';
		   echo '<span class = "notifauthor" address = "'.$passive.'" link = "privatetalk/livechat/livechat.php?tablemessage='.$conversation_name.'"><b> '.$author.'</b></span>';
		   echo ' <span class = "action">&nbsp '.$action.' a '.$nature.' in '.$place.'</span>';
		   echo '<br><span class= "ago" >'.$date.'</span></div> ';
		   echo'</div>';
		   echo'</div>';
		   echo'</div></div>';

	}
?>

<style>
.a-notif {
	color: black;
}
a.a-notif:focus {
    background-color: red;
}

a.a-notif:hover {
    background-color: black;
    color: grey;
}

a.a-notif:active {
    background-color: blue;
}
.warpnotif{
	border-bottom: 2px solid #CCCCCC;
	clear: both;
	height:70px;
}
.warpnotif:hover {
	background-color: rgba(255, 161, 75, 0.86);
	cursor: hand;
}
.header-notif{
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
			.notiflisttext {
				padding: 0 5;
				white-space:;
				float: left;
				width:15;
			}
				.texttrim {
					width: 320px;
					line-height: 21px;
					padding-top:5px;
				}
				.notifauthor {	
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

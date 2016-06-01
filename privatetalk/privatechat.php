<?php
   require('../session.php');
?>
<html>
<head>
<title>Welcome </title>
<link rel="stylesheet" type="text/css" href="message.css">
<script src="../jquery.min.js"></script>
<script >
// this hide the text area input recipient
function showDiv() {
   document.getElementById('newmessage').style.display = "block";
}
</script>


<script>
//this reset the text message area after submit not working yet

function reset () {
	$("textarea[name=message]").val("");
}
</script>

</head>
<body>
<header class = "header">
	<h1>Tolotra Net 
	</h1>
</header>

<div class = "active"> 
	<h4>Welcome <?php echo $login_session; ?>, </h4>
	<div class = "title" > Connect with: </div> 
	<div class = "activelist" ></div>
	<br></br>
	<div id = "overtime">  </div> 
	<h2><a class = "logout" href = "../logout.php" >Sign Out</a></h2>
 </div>
<div id = "nav" class = "nav" scrolling="yes">
	<div>
		<h4>Welcome <?php echo $login_session; ?>, </h4>
		<a href="../welcome.php">Homepage</a><br>
		<a href="../textchat/textchat.html">Forum</a><br>
		Call<br>
		Room Invite
	</div>
	<div id = "inbox" class= "conversation">
		<?php 
		// require  ('inbox.php'); ?>
	</div>
</div>
	<div class ="maincontainer">
	 <div>
		<div class = "chatwarp">
	<!--<iframe style="visibility:hidden;" onload="this.style.visibility = 'visible';"id = "messageframe" name = "messageframe" class = "message" 	>
			</iframe> -->
			<div  onload="this.style.visibility = 'visible';"id = "messageframe" name = "messageframe" class = "message" 	>
			</div>
		
			<div class="postbox">
			
				<form action = "createcollect.php" target = "targetframe" method = "post" enctype="multipart/form-data">
					<h3 style ="float:left">Write the message</h3>
					<h3 style = "float:right;  border: 1px solid grey; border-radius: 2px;cursor:hand" onclick="showDiv()">New message</h3>
						<input name = "recipient" value = "" id="newmessage"  rows="1" style="width:100%;display:none;" placeholder="Write the recipient's username here...." /> 
					<textarea name = "message" id="messageinput" rows="4" style="width:100%;"></textarea>      
					<input type = "file" name = "uploadfile" id="status" rows="5" style="width:800px" />
					<span id="text_counter"></span><input class="btn btn-large btn-primary pull-right" type="submit" id="sending" onclicked = "reset ()" value="Send" />
				</form>
				<script>
$("textarea[name=message]").val("");
				</script>
			</div>
		</div>
		<div class = "visualwrapper">
			<div class="postvisual">
				<form action = "../visualboard/visualcollectfrommessage.php" method = "post" enctype="multipart/form-data">
					<h3>What's your dream?</h3>
					<textarea name = "post" id="status2" rows="1" style="width:100%"></textarea>      
					<input type = "file" name = "uploadfile" id="status3" rows="5" style="width:800px" />
					<span id="text_counter2"></span><input class="btn btn-large btn-primary pull-right" type="submit" id="posting" value="Post" onclicked = "reset()"/>
				</form>
			</div>
<script src="js/refresh.js"></script>
<script src="js/alert.js"></script>
<script src="js/inbox.js"></script>
			<iframe allowTransparency="true" scrolling="yes" frameborder="0" src = "../visualboard/visualboard.html" class = "visualboard"></iframe>
<iframe style="visibility:hidden;" onload="this.style.visibility = 'visible';"id = "targetframe" name = "targetframe" class = "message" 	>
</iframe> 
		
		
		</div>
		</div>
		
</body>		
<footer>

Copyright © TolotraNet @ Tolotra Corporation
</footer>
</html>

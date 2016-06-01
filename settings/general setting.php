<script src="../jquery.min.js"></script>
<h1>General setting</h1>
<h2>Theme</h2>
<a><div class = "color blue" color ="blue"></div><a/>
<a><div class = "color red" color = "red"></div><a/>
<a><div class = "color green" color = "green"></div><a/>
<a><div class = "color white" color = "white"></div><a/>
<a><div class = "color black" color = "black"></div><a/>
<a><div class = "color grey" color = "grey"></div><a/>
<a><div class = "color orange" color = "orange"></div><a/>
<a><div class = "color pink" color = "pink"></div><a/>
<a><div class = "color yellow" color = "yellow"></div><a/>


<form method = "post" target = "targetframe" action = "settings/settingaction.php">
<input name = "theme" type ="text" value= "Groupe" /><br>
<input name = "theme" type ="text" value = "Change password"/><br>
<input id = "theme" name = "theme" style="display: none" type ="text" value = "<?php require '../session.php' ; echo $theme ?>"/><br>
<h2>Gadget</h1>
  <input type="radio" name="gadget" value="php-static-component/\postvisual.php"> Visualboard<br>
  <input type="radio" name="gadget" value="analytic"> Analytics<br>
  <input type="radio" name="gadget" value="Deadlines"> Deadlines<br>
  <input type="radio" name="gadget" value="Historic"> Historic<br>
 <input type="radio" name="gadget" value="empty"> None<br>
<input type ="submit"  value = "Save"/>
</form>
<script>
$('.color').click(function () {
	//alert('clicked');
	var color = $(this).attr('color');
	//alert(color);
	$('input[id=theme]').val(color);
	$('.color').css("width","50px");
	$('.color').css("height","50px");
	$('.color').css("border","1px");
	
	$(this).css("width","200px");
	$(this).css("height","200px");
	$(this).css("border","5px solid black");
	theme = 'settings/theme/'+color+'.css';
	$('#themestyle').attr("href",theme);
	//$('#theme').attr("href","bouba.com");
})
</script>
<style>
.color{ height:50px;
width:50px;
display: inline-block;
cursor: hand;
}
.color:hover{
	border: 1px solid black;
}
.color:visited{
	border: 1px solid pink;
}
.color:active{
	height:100px;
width:100px;
}
.blue {
	background-color: blue;
}
.red {
	background-color: red;
}.yellow {
	background-color: yellow;
}.grey {
	background-color: grey;
}.black {
	background-color: black;
}.white {
	background-color: white;
	border:1px solid black;
}.orange {
	background-color: orange;
}.pink {
	background-color: pink;
}.green {
	background-color: green;
}
</style>
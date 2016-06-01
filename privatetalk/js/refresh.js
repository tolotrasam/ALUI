 setInterval (function()
 {
  // a function which will load data from other file after x seconds
      $("#overtime").load("../activeusers/overtime.php").fadeIn("slow");
// refresh div after  secs  
},1000);          
		 //this script auto refresh the list of active users
 setInterval (function()
	 {$(".activelist").load("../activeusers/listofactiveusers.php").fadeIn("slow");},1000
	 );  
        // this replace the require inbox.php function inside id = inbox into a dynamic div content
$(document).ready(function(){
			$("#inbox").load('inbox.php');
			});
		
		// NEW this load html inside div 
		$(document).ready(function(){
			$("#messageframe").load('messageprint.php');
		});
		
		
		
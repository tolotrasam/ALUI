
//////////////////////instant inbox resher using event listener starts here//////////////////////////
var y = 0 //  generated by PHP
function refreshdiv(){
	var page = "inbox.php";
        $('#inbox').load(page);
    }
	
//this is the function processUpdate
var processUpdate = function( answer ) 
{
	// alert('inbox checkpoint1 inbox');

    if ( y != answer ) 
    {
        //replace_current_data_with_new_via_ajax();
		 // alert('its inbox last date=');
		 // alert(answer);
        y = answer;
		refreshdiv ();
		
    }
	else{	
	// alert('nothing');
	// alert(x);
	}
}
//  Compare our current Generate ID against that of the server
var checkinbox = function()
{
		page = "inboxlisten.php";
    serverPoll = setInterval( function()
    {
        $.get(page, 
          // { lastupdate: 1 }, this is a parameter to send to the php file
          processUpdate, 'html');
    }, 2000 )
};

//  Check for updates onload of the document

$(document).ready( checkinbox );
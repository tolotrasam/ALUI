//build new minichatbox
var address;
$(document).on('click','.linkfloat', function(){
	address = $(this).attr('address');
	var page = $(this).attr('link');
	//var page = 'privatetalk/livechat/livechat.php?tablemessage=&contact=miantsanita';
	 $('#floatchat').append(
				 '<div class = "minitextbox" id = "'+address+'" ><div class = "barchat"><object  class = "minitext" type="text/html" data="'+page+'" ></object><form action = "privatetalk/createcollect.php" class = "miniform" target = "targetframe" method = "post" enctype="multipart/form-data"><input name = "recipient" type = text/ class = "minitextarea" value = "'+address+'" style = "display: none;"><input type = text/ class = "minitextarea" name = "message"><input class="btn btn-large btn-primary pull-right" type="submit" id="sending" onclicked = "reset ()" value="Send" /></form></div>'
				  )
				 // ;alert (address);
});
//inbox append
$(document).on('click','.inboxwrap', function(){
	address = $(this).attr('address');
	var page = $(this).attr('link');
	//var page = 'privatetalk/livechat/livechat.php?tablemessage=&contact=miantsanita';
	 $('#floatchat').append(
				 '<div class = "minitextbox" id = "'+address+'" ><div class = "barchat"><object  class = "minitext" type="text/html" data="'+page+'" ></object><form action = "privatetalk/createcollect.php" class = "miniform" target = "targetframe" method = "post" enctype="multipart/form-data"><input name = "recipient" type = text/ class = "minitextarea" value = "'+address+'" style = "display: none;"><input type = text/ class = "minitextarea" name = "message"><input class="btn btn-large btn-primary pull-right" type="submit" id="sending" onclicked = "reset ()" value="Send" /></form></div>'
				  )
				 // ;alert (address);
});
//minitextbox effect icons (related with child: messageprintlive.php)
function closeminitext(id){
	// alert(id);
	//$(this).parent('.minitextbox').remove();
	//alert('remove');
    document.getElementById(id).remove();
}
//feedprint
$(document).ready(function(){
	$('.feedprint').load('feed/feedprint.php');
})

//update chat box in live using javascript listener
//hide postbox
$('#hide-postbox').click(function(){
    if($(this).hasClass("clicked")){
        $(this).removeClass("clicked");
		$(this).attr('class','fa fa-caret-square-o-down left');
        $('.share').addClass('hide');
		
    }else{
        $(this).addClass("clicked");
				$(this).attr('class','fa fa-caret-square-o-up clicked left');
        $('.share').removeClass('hide');
		//$('#minimessage').text(0);
    }
});
//hide-header body
$('#hide-header').click(function(){
    if($(this).hasClass("clicked")){
        $(this).removeClass("clicked");
        $('body').animate({top: "+=110px"});
        $('#zoom').animate({top: "-=110px"});
		$(this).attr('class','fa fa-angle-double-up');
    }else{
        $(this).addClass("clicked");
 $('body').animate({top: "-=110px"});
 $('#zoom').animate({top: "+=110px"});
		$(this).attr('class','fa fa-angle-double-down clicked');
		
    }
});

//event mini box
$('#mininotification').click(function(){
    if($(this).hasClass("clicked")){
        $(this).removeClass("clicked");
        $('.notification').addClass('hide');
        $('#minimessage').removeClass('clicked');
    }else{
        $(this).addClass("clicked");
		
        $('.notification').removeClass('hide');
        $('.messagepopup').addClass('hide');
		$('#notifcount').text('0');
        $('#minimessage').removeClass('clicked');
		$('.notification').load('notification/notification.php');
		
    }
});
//event mininotification
$('#minimessage').click(function(){
    if($(this).hasClass("clicked")){
        $(this).removeClass("clicked");
        $('.messagepopup').addClass('hide');
		$('#mininotification').removeClass('clicked');

    }else{
        $(this).addClass("clicked");
		
        $('.messagepopup').removeClass('hide');
        $('#messagecount').text('0');
        $('.notification').addClass('hide');
        $('#mininotification').removeClass('clicked');
		$('.messagepopup').load('privatetalk/inbox.php');
    }
});

//


//popup link course

$('#showpopup').click(function(){
$('#linkpopup').removeClass('hide');})

$('#hidepopup').click(function(){
$('#linkpopup').addClass('hide');})



//nav left menu
$('.nav-menu').click(function(){
 var page = $(this).attr('link');
 $(".bucket").html('<iframe name = "target-design" id ="target-design"src='+page+'></iframe>');
    })
	
	//
	$('.navmenu').click(function(){
 var page = $(this).attr('link');
 $(".bucket").html('<iframe name = "target-design" id ="target-design"src='+page+'></iframe>');
    })
//notification load inside bucket
$(document).on('click','.a-notif', function(){
	var code = $(this).attr('href');
	//alert('clicked!!!!!!!');
	 $(".feedcontainer").load('feed/feedprint.php?code='+code+'');
    })
	
	//show comment
	
	$(document).on('click','.showcomment', function(){
		// alert('clicked!!!!!!!!!!!!');
	var code = $(this).attr('code');
	var toshow = '#hider-'+code+'';
	// alert (toshow);
	    if($(this).hasClass("clicked")){
        $(this).removeClass("clicked");
	 $(''+toshow+'').addClass('hide');
    }else{
        $(this).addClass("clicked");
	 $(''+toshow+'').removeClass('hide');        
    }
    })
	//dynamic comment without refresh
	$(document).on('click','.comment-post', function(){
	var code = $(this).attr('code');
	var print = '#hider-'+code+'';
	var origin = '#value-'+code+'';
	var value= $(''+origin+'').val()
	d = new Date();
	var author = "<?php echo $login_session ?>";
	var author = "You";
	//alert (author);
	 $(''+print+'').prepend(
	'<div class="comment" name="wBOY6y5xcv"><span class="author">'+author+'</span><br>'+value+'<br><span class="date">Posted: '+d+'|</span><br><span class="replies">No replies</span><span class="replies"> Reply</span><form target="targetframe" action="comment/reply.php" method="post" enctpye="" name="new_comment"><div class="cut-line"></div><input type="hidden" name="par_code" value="wBOY6y5xcv"><input type="hidden" name="feed_code" value="8P06PCCEAj"><textarea class="text_cmt form-control message" name="text_cmt" placeholder="Reply to rsamuel15"></textarea><br><input type="submit" class="btn btn-primary pull-right" value="Reply"></form></div> ')})
	
	//main post dynamic refresh
	$('#mainpost').click(function(){
   // clearTimeout(timer);
    timer = setTimeout(function (event) {
		//alert('clicked!!!!');
			$('.feedprint').load('feed/feedprint.php');    
    }, 2000);
});

//like button + un


//alert(current);	

	
//like post
$(document).on('click','.like-post', function(){
		var code = $(this).attr('code');
   if($(this).hasClass("clicked")){
        $(this).removeClass("clicked");
    var current = ( $(this).attr('like_number') );   
		current;
         $(this).val('like('+current+')');
		  $.post("like/like.php",
        {
          code: code,
          city: "California"
        })
		//alert(code)
		
    }else{
		    var current = ( $(this).attr('like_number') );   
        $(this).addClass("clicked");
       	current++;
    $(this).val('You liked('+current+')');
	  $.post("like/like.php",
        {
          code: code,
          city: "California"
        })
    }
});
	
	//setting
$('#setting').click(function (){
	var link = $(this).attr('link');
	$('.bucket').load (link);
}	)

//zoom image feed
$(document).on('click','.image-feed, .visual-picture', function(){
	$('#zoom').css('display','block');
 $(this).clone().appendTo(".zoom-picture");
//$(this.parent).html(this);
var inside = '.zoom-picture  > .'+$(this).attr('class')+'';
	//alert(inside);
	$(inside).attr('style','');
$(inside).css('height', '100%');
$(inside).css('max-width', '100%');
	})
//close icons 
$(document).on('click','.close', function(){
	var target = $(this).attr('on');
	//alert(target);
	$(target).css('display', 'none'); 
	$('.zoom-picture').html('');
	
})

//left hider list of active users

$('#left-hider').click(function(){
    if($(this).hasClass("clicked")){
        $(this).removeClass("clicked");
        $(this).attr('class','fa fa-lock left');	
        $(".rightpanel").unbind();
//$(this).bind();		
    }else{
        $(this).addClass("clicked");
        $('#left-hider').hasClass("clicked")
        $(this).attr('class','fa fa-unlock-alt clicked left');
            $('.rightpanel').mouseover(function()
            {
                $(this).css("cursor","pointer");
                $(this).stop().animate({right: "25px"}, 'fast');
            });
    
            $('.rightpanel').mouseout(function()
            {   
                $(this).stop().animate({right: "-178px"}, 'fast');
            });}
    }
);
// $(document).ready(function(){
    // $(".rightpanel").mouseover(function(){
        // $(".rightpanel").animate({right: "+25px"});
        // $(".rightpanel").css('backgroundColor','blue');
		
    // });
    // $(".rightpanel").mouseout(function(){
		 // $(".rightpanel").css('backgroundColor','white');
         // $(".rightpanel").animate({right: "-178px"});
     // });
// });
//gadget visualwrapper
 $(document).ready(function(){
	// var x = "<?php echo $content ?>"
// alert (x);
// if (gadget === undefined || gadget === null) {
     // do something 
	// alert ('none');
// }if (typeof gadget["AL"] == 'undefined') {
	 // alert (gadget);
 $(".visualwrapper").load(gadget)}
 )
	
<!-- search --> <div class = "search">
						<link href="searchstyle.css" rel="stylesheet" type="text/css">
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
                            <script type="text/javascript">
                                function searchToggle(obj, evt) {
                                    var container = $(obj).closest('.search-wrapper');
                                    if (!container.hasClass('active')) {
                                        container.addClass('active');
                                        evt.preventDefault();
                                    }
                                    else if (container.hasClass('active') && $(obj).closest('.input-holder').length == 0) {
                                        container.removeClass('active');
                                        // clear input
                                        container.find('.search-input').val('');
                                        // clear and hide result container when we press close
                                        container.find('.result-container').fadeOut(100, function () { $(this).empty(); });
                                    }
                                }

								var processUpdate = function( response ) {
									alert(response);
								}

                                function submitFn(obj, evt) {
                                    value = $(obj).find('.search-input').val().trim();

                                    _html = "Yup yup! Your search text sounds like this: ";
                                    if (!value.length) {
                                        _html = "Yup yup! Add some text friend :D";
                                    }
                                    else {
                                        _html += "<b>" + value + "</b>";
										var page = "search/search.php?search=";
										$('.feedprint').load(page+value);
										
   // this ajax is working
   //$.ajax({
        // url: 'search/search.php', 
        // type: "POST",
        // data: ({search: value}),
        // success: function(data){
		// alert(data);	}}) 
		
		}

                                    $(obj).find('.result-container').html('<span>' + _html + '</span>');
                                    $(obj).find('.result-container').fadeIn(100);

                                    evt.preventDefault();
                                }
								
								//ajax

                            </script>


                            <form onsubmit="submitFn(this, event);" action= "search/search.php" method = "POST">
                                <div class="search-wrapper">
                                    <div class="input-holder">
                                        <input type="text" name = "search" class="search-input" placeholder="Type to search" />
                                        <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                                    </div>
                                    <span class="close" onclick="searchToggle(this, event);"></span>
                                    <div class="result-container">
                                    </div>
                                </div>
                            </form>
							</div>
					<!-- search -->

                                                                                <link rel="stylesheet" type="text/css" href="css/style.css" />
                                                                                <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
                                                                                <noscript>
                                                                                    <link rel="stylesheet" type="text/css" href="css/noJS.css" />
                                                                                </noscript>
                                                                            <div class="containerdropboxes">
                                                                                    <section class="main left">
                                                                                        <div class="wrapper-demo">
                                                                                            <div id="dd1" class="wrapper-dropdown-1" tabindex="1">
																							  <span id="target">Course</span>
																																															<textarea name = "course" style="display: none; color: black"></textarea>                                                                                              
                                                                                                <ul class="dropdown" tabindex="1">
                                                                                                    <li><a href="#">DnD</a></li>
                                                                                                    <li><a href="#">EL</a></li>
                                                                                                    <li><a href="#">C4I</a></li>
                                                                                                    <li><a href="#">Project</a></li>
                                                                                                </ul>
                                                                                                
                                                                                            </div>
                                                                                            ​
                                                                                        </div>
                                                                                    </section>
                                                                             
                                                                                <section class="main left">
                                                                                    <div class="wrapper-demo">
                                                                                        <div id="dd2" class="wrapper-dropdown-1" tabindex="1">
																							<span id="target">Audience</span>
																																																	<textarea name = "audience2" style="display: none; color: black"></textarea>
                                                                                            <ul class="dropdown" tabindex="1">
                                                                                                <li><a href="#">Everyone</a></li>
                                                                                                <li><a href="#">Peer Group</a></li>
                                                                                                <li><a href="#">My Cohorot</a></li>
                                                                                                <li><a href="#">Students</a></li>
                                                                                                <li><a href="#">Staff</a></li>
                                                                                            </ul>

																		
																			
																							
                                                                                        </div>
                                                                                        ​
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                            <!-- jQuery if needed -->
                                                                            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                                                                            <script type="text/javascript">

                                                                                function DropDown(el) {
                                                                                    this.dd = el;
                                                                                    this.placeholder = this.dd.children('span');
                                                                                    this.input = this.dd.children('textarea');
                                                                                    // this.input = this.dd.children('input');
                                                                                    this.opts = this.dd.find('ul.dropdown > li');
                                                                                    this.val = '';
                                                                                    this.index = -1;
                                                                                    this.initEvents();
                                                                                }
                                                                                DropDown.prototype = {
                                                                                    initEvents: function () {
                                                                                        var obj = this;

                                                                                        obj.dd.on('click', function (event) {
                                                                                            $(this).toggleClass('active');
                                                                                            return false;

                                                                                        });

                                                                                        obj.opts.on('click', function () {
                                                                                            var opt = $(this);
                                                                                            obj.val = opt.text();
                                                                                            obj.index = opt.index();
                                                                                            obj.placeholder.text('Course: ' + obj.val);
                                                                                            obj.input.text(obj.val);
                                                                                        });
                                                                                    },
                                                                                    getValue: function () {
                                                                                        return this.val;
                                                                                    },
                                                                                    getIndex: function () {
                                                                                        return this.index;
                                                                                    }
                                                                                }

                                                                                $(function () {

                                                                                    var dd = new DropDown($('#dd1'));

                                                                                    $(document).click(function () {
                                                                                        // all dropdowns
                                                                                        $('.wrapper-dropdown-1').removeClass('active');
                                                                                    });

                                                                                });
																				/////////////
                                                                                function DropDown2(el) {
                                                                                    this.dd = el;
                                                                                    this.placeholder = this.dd.children('span');
                                                                                    this.input = this.dd.children('textarea');
                                                                                    this.opts = this.dd.find('ul.dropdown > li');
                                                                                    this.val = '';
                                                                                    this.index = -1;
                                                                                    this.initEvents();
                                                                                }
                                                                                DropDown2.prototype = {
                                                                                    initEvents: function () {
                                                                                        var obj = this;

                                                                                        obj.dd.on('click', function (event) {
                                                                                            $(this).toggleClass('active');
                                                                                            return false;

                                                                                        });

                                                                                        obj.opts.on('click', function () {
                                                                                            var opt = $(this);
                                                                                            obj.val = opt.text();
                                                                                            obj.index = opt.index();
                                                                                            obj.placeholder.text('Audience: ' + obj.val);
                                                                                            obj.input.text(obj.val);
                                                                                        });
                                                                                    },
                                                                                    getValue: function () {
                                                                                        return this.val;
                                                                                    },
                                                                                    getIndex: function () {
                                                                                        return this.index;
                                                                                    }
                                                                                }

                                                                                $(function () {

                                                                                    var dd = new DropDown2($('#dd2'));

                                                                                    $(document).click(function () {
                                                                                        // all dropdowns
                                                                                        $('.wrapper-dropdown-1').removeClass('active');
                                                                                    });

                                                                                });

                                                                            </script>
																			<!-- end of complex java boxes -->
																			           
                                                                        </div>
                                                                    </div>
                                                                </div>

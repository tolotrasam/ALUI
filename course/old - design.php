
<link rel="stylesheet" type="text/css" href = "design.css"/>
<h1>Welcome to Design</h1>
<div id = "design">
<h2>Design a course
</h2>
<form action = "coursecollect.php" target = "target-preview" method= "post"  enctype="multipart/form-data">
Type:<br>
<select name = "type">
<option value = "Peer work">Peer work</option>
<option value = "Self work">Self work</option>
<option value = "Project">Project</option>
<option value = "Discovery">Discovery</option>
<option value = "In Class">In Class</option>
<option value = "Free resources">Free ressources</option>
</select>



<select name = "assessment">
<option value = "summative">summative</option>
<option value = "formative">formative</option>
</select>
<select name="course" class="">
                                                                                <option value="DnD" selected="selected">DnD</option>
                                                                                <option value="Project">Project</option>
                                                                                <option value="C4I">C4I</option>
                                                                                <option value="EL">EL</option>
																				<?php //include 'feed/audience.php'?>
                                                                            </select>
																	<br>Class<br>
																	<select name="year" class="">
																	
                                                                                <option value="January" selected="selected">January</option>
                                                                                <option value="September">September</option>
                                                                          
																				<?php //include 'feed/audience.php'?>
                                                                            </select>
																			
																			<select name="week" class="">
                                                                                <option value="1" selected="1">Week 1</option>
                                                                                <option value="2">Week 2</option>
                                                                                <option value="3">Week 3</option> <option value="4">Week 4</option> <option value="5">Week 5</option> <option value="6">Week 6</option> <option value="7">Week 7</option> <option value="8">Week 8</option>
         
                                                                  </select>
																  <select name="cohort" class="">
                                                                                <option value="A" selected="selected">A</option>
                                                                                <option value="B">B</option>
                                                                                <option value="C">C</option>
         
                                                                  </select>
																  <br>
																  Deadline:
			  <br>
<input type = "date" name = "deadline" />
<input type = "hour" name = "hour" placeholder = "hour"/>
<br>
Overview 
<br>
<input name = "topic" type = "text" placeholder = "topic" /><br>
<input name = "title" type = "text" placeholder = "title" /><br>
<textarea name = "description"  placeholder = "description" ></textarea>
<input name = "overview" type = "text" placeholder = "overview link" />
<input name = "duration" type = "range" placeholder = "duration" />
<br>
Objectives:
<br>
<input name = "objective1" type = "text" placeholder = "objective1" /><br>
<!--<input name = "objective2" type = "text" placeholder = "objective2" /><br>
<input name = "objective3" type = "text" placeholder = "objective3" /><br>
<input name = "objective4" type = "text" placeholder = "objective4" /><br>
<input name = "objective5" type = "text" placeholder = "objective5" /><br>-->
+add more objectives
<br>
Deliverable:
<br>
<input name = "deliverable1" type = "text" placeholder = "deliverable1" /><br>
<!--<input name = "deliverable2" type = "text" placeholder = "deliverable2" /><br>
<input name = "deliverable3" type = "text" placeholder = "deliverable3" /><br>
<input name = "deliverable4" type = "text" placeholder = "deliverable4" /><br>-->
+add more deliverables

Learning outcomes:
<br>
<input name = "LO1" type = "text" placeholder = "LO1" /><textarea name = "descriptionLO1"  placeholder = "description" ></textarea>	<br>
<input name = "LO2" type = "text" placeholder = "LO2" /><textarea name = "descriptionLO2"  placeholder = "description" ></textarea><br>
<input name = "LO3" type = "text" placeholder = "LO3" /><textarea name = "descriptionLO3"  placeholder = "description" ></textarea><br>
<input name = "LO4" type = "text" placeholder = "LO4" /><textarea name = "descriptionLO4"  placeholder = "description" ></textarea><br>
+add more learning outcome
<br>
<div class = "ressource">
Resources and timeline:
<br>
<input name = "link1title" type = "text" placeholder = "short title..." />
<textarea name = "instruction1"  placeholder = "instruction" ></textarea>
<input name = "link1" type = "text" placeholder = "resource" />
<input name = "question1" type = "text" placeholder = "question to consider" />
<input name = "duration1" type = "range" placeholder = "duration" />

<br>
<input name = "link2title" type = "text" placeholder = "short title..." />
<textarea name = "instruction2"  placeholder = "instruction" ></textarea>
<input name = "link2" type = "text" placeholder = "resource" />
<input name = "question2" type = "text" placeholder = "question to consider" />
<input name = "duration2" type = "range" placeholder = "duration" />

<br>
<input name = "link3title" type = "text" placeholder = "short title..." />
<textarea name = "instruction3"  placeholder = "instruction" ></textarea>
<input name = "link3" type = "text" placeholder = "resource" />
<input name = "question3" type = "text" placeholder = "question to consider" />
<input name = "duration3" type = "range" placeholder = "duration" />

<br>
<input name = "link4title" type = "text" placeholder = "short title..." />
<textarea name = "instruction4"  placeholder = "instruction" ></textarea>
<input name = "link4" type = "text" placeholder = "resource" />
<input name = "question4" type = "text" placeholder = "question to consider" />
<input name = "duration4" type = "range" placeholder = "duration" />
<br>


+add more ...
<br>
</div>

<input type = "button" value = "publish"/>
<input type = "submit" value = "preview"  />
<input type = "button" value = "share"/>
<input type = "button" value = "save"/>
</form>
</div>

<input type = "submit" />
</form>
<script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
<style>
.mce-tinymce {
width: 300}
</style>
<script>
tinymce.init({
  selector: 'textarea',
  menubar: false,
  height: 100,
  widht: 100,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools'
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
 //input now
 
tinymce.init({
  selector: 'input[type="text"]',
  menubar: false,
  height: 100,
  widht: 100,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools'
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
</script>


<div id = "preview">
<h2>Preview
</h2>
<iframe name = "target-preview" id = "target-preview">
</iframe>
</div>

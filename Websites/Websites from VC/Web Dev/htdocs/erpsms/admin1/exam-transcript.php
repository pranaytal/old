<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/st_index.css" media="screen" rel="stylesheet" type="text/css">
<!--------- Start head ---------------->

</head>

  <body>
    
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    
    <div id="content_wrapper">
    
                           <!-- Side bar -->
   <?php include("include/sidebar5.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
<img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>View Transcripts</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  
  <div class="box">

    <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA="></div>
      <div class="label-field-pair">
        <label for="student_course">Select a batch :</label>
        <div class="text-input-bg">
          <select id="transcript_batch_id" name="transcript[batch_id]"><option value="">Select a batch</option>
<option value="43">1 - 1st Semester</option>
<option value="46">2 - 2nd Semester</option>
<option value="44">2 - 2nd Semester</option>
<option value="45">3 - 1st Semester</option>
<option value="62">3 - 2012-2013</option></select></div></div>
      <input class="submit_button" name="commit" type="submit" value="► View">
    </form>
    <div class="extender"></div>
  </div></div>
 </div>

      <div class="extender"></div>
    </div>

   <?php include("include/footer.php")?> 
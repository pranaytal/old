<?php
   $id=$_GET[id]; 
  $exam_class_desination= new Main(); 
  //$student = new Main(); // create a new news object
//$newsRecordSet = $student->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");
$newsRecordSet = $exam_class_desination->getdata('*',"exam_class_desination","exam_class_desi_id = '$id'","", "");
//$record2 = $newsRecordSet->getNextRecord();
echo $a=$record2[batch];
   $student = new Main(); // create a new news object

 if(isset($_POST['updateNew_bt'])) // If the submit button was clicked
    {
      // manage course update 
			 $id=$_GET[id];  
		     $post['class_name'] =$_POST['ranking_level_name'];      
			  $post['class_marks'] =$_POST['ranking_level_marks'];
			  // $post['number_of_subject'] =$_POST['ranking_level_subject_count'];
			 //$post['fee_category_description'] =$_POST['finance_fee_category_description'];
			  
			   if($exam_class_desination->updateData($post,"exam_class_desination","exam_class_desi_id ='$id'"))
				 {
				 $msg="Class Desination updated Succesfully";
				 header("location:?page=class_designations&exam_class_desi_id=$id&msg=$msg");			
				}
				else
				{
					$msg="Error :  Entry not done, Please check Values";
					header("location:?page=class_designations&exam_class_desi_id=$id&error=$msg");
				}		
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/ranking_ index.css" media="screen" rel="stylesheet" type="text/css">
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
      <div id="content"> <div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Edit Class Desination</h1>
  <h3>Edit Class Desination</h3>
  <div id="app-back-button">
    <a href="/ranking_levels#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
 <div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div></div> 
          <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { ?>
    <?php  $a=$record[batch];?>
  <form action="#" method="post"><div style="margin:0;padding:0;display:inline">
  <div class="course-select">
    <div class="label-field-pair">
      <label for="student_course">Select a course:</label>
      <div class="text-input-bg">
<?php $newsRecordSet1 = $student->getdata('*',"course,batch,exam_ranking_levels","batch.batch_id =$a","","");
 if( ($record1= $newsRecordSet1->getNextRecord()) !== false )
    { ?>
      
         <select id="std_batch_code" name="std_batch_code" onChange="showstudent(this.value)">
        
       <!-- <option value="">Select A Batch</option>-->

<option value="<?=$record1['batch_course_code']?>"> <?=$record1['batch_course_code']." ".$record1['batch_code']?></option>

<?php } ?>
</select>
  
       <!-- <select id="ranking_level_course_id" name="ranking_level[course_id]" onChange="new Ajax.Request(&#39;/ranking_levels/load_ranking_levels&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;course_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)})"><option value="">Select a course</option>
<option value="25">MBA Business Management </option>
<option value="26">MBA International Marketing </option>
<option value="27">MCA Software </option>
<option value="28">MCA Protocol</option>
<option value="41">Standard 3 </option></select>--></div></div>
  </div>
  <div id="flash"></div>

  <div id="errors">
  
  
  
 


  </div>
  <div id="course_ranking_levels">
<div id="rank_form">


 <!--------------------end ajax calling  Student list --------------------------------->
 <input name="authenticity_token" type="hidden" value="Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA="></div>

    <div id="form-content">
      <div class="label-field-pair">
        <label for="name">Name</label>
        <div class="text-input-bg"><input id="ranking_level_name" name="ranking_level_name" value="<?=$record['class_name']?>" size="30" type="text"></div>
      </div>
      
        <div class="label-field-pair">
          <label for="marks">CGPA</label>
          <div class="text-input-bg"><input id="ranking_level_marks" name="ranking_level_marks" value="<?=$record['class_marks']?>"size="30" type="text"></div>
        </div>
      
    
     

      <div class="extender"></div>

      <div id="submit-button">
        <input name="updateNew_bt" type="submit" value="► Update">
      </div>


    </div>
  </form>
  <?php } ?>
  
</div>

<!--<div id="category-list">
  <ul class="category-list">
  
    <li class="heading">Ranking Levels</li>
    
        <li class="listodd">
          <div class="category-name">A
            <span class="category-up-down Inactive"><a href="http://demo.fedena.org/ranking_levels#" onClick="new Ajax.Request(&#39;/ranking_levels/change_priority/1?order=up&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)}); return false;">▲</a></span>
            <span class="category-up-down Inactive"><a href="http://demo.fedena.org/ranking_levels#" onClick="new Ajax.Request(&#39;/ranking_levels/change_priority/1?order=down&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)}); return false;">▼</a></span>
            </div>
          <div class="category-edit"><a href="http://demo.fedena.org/ranking_levels#" onClick="new Ajax.Request(&#39;/ranking_levels/edit_ranking_level/1&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)}); return false;">Edit</a></div><div class="category-delete">   <a href="http://demo.fedena.org/ranking_levels#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { new Ajax.Request(&#39;/ranking_levels/delete_ranking_level/1&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)}); }; return false;">Delete</a></div>
        </li>
      
  
</ul>


</div>--></div>
</div> </div>

      <div class="extender"></div>
    </div>

  <?php include("include/footer.php")?> 
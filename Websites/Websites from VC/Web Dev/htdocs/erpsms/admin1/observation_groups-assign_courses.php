<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/assign_courses.css" media="screen" rel="stylesheet" type="text/css">

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
  <h1>Co Scholastic Group</h1>
  <h3>Assign Co Scholastic Groups to courses</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/observation_groups/assign_courses#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>

  </ul>
</div>

<div id="page-yield">
  <div id="flash-box"></div>
  <div class="label-field-pair">
    <label for="course_id">Select a course</label>
    <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
    <div class="text-input-bg">
      <select id="course_course_id" name="course[course_id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/observation_groups/select_observation_groups&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;course_id=&#39;+ value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)})"><option value="">Select a course</option>
<option value="25">MBA Business Management </option></select>
    </div>
  </div>
  <div id="select_observation_group"><form action="http://demo.fedena.org/observation_groups/update_course_obs_groups/25" class="edit_course" id="edit_course_25" method="post" onSubmit="new Ajax.Request(&#39;/observation_groups/update_course_obs_groups/25&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI="></div>
  <ul id="category-list">
    <li class="listheading">
      <div class="heading-name">Select observation groups</div>
      <div class="heading-edit">
  
      </div>
    </li>
    
    
        <li class="listodd">
          <label>
            <div class="category-edit">
              <input checked="checked" id="course_observation_group_ids_" name="course[observation_group_ids][]" type="checkbox" value="1">
            </div>
            <div class="category-name">
              observation group
            </div>
          </label>
        </li>
      
  </ul>
  <input class="submit_button" id="course_submit" name="commit" type="submit" value="► Save">
</form></div>
</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>
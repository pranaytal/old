<?php 
$emp_category = new Main(); 
$cat_id=$_GET[emp_catid];	
$newsRecordSet = $emp_category->getdata('*',"emp_category","emp_cat_id='$cat_id'","emp_cat_id DESC", "50");


//Update code run 
 if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // emp edit catagory entry 
 	 		   //$emp_cat_id=$_POST['cat_id'];
			   $post['emp_cat_type'] =$_POST['category_name'];
			   $post['emp_cat_desc'] =$_POST['category_prefix'];
			  
			   if($emp_category->updateData($post,"emp_category","emp_cat_id='$cat_id'"))
				   {
				$msg="Update  Added Succesfully";
				header("location:?page=employee_add_category&emp_cat_id=$cat_id&msg=$msg");			
			}
			else
			{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=employee_add_category&error=$msg");
			}		
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/add_category.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
 <!-------------Insert the 3 oct  code of validation--------------------------------------------->
  <script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine();
			
		});
	</script>
<!-------------End the code of validation--------------------------------------------->   
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
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Employee Settings</h1>
  <h3>Editing Category</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<!-- Insert the msg code ------------------------------------>
    <div class="msg" ><?php echo $_GET[msg]?></div>
    <div class="error" ><?php echo $_GET[error]?></div>
<!-- End the msg code --------------------------------------->

<div id="page-yield">

 <?php  while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
   ?>   
   
 <form id="formID" name="formID" action="#" method="post"><div style="margin:0;padding:0;display:inline">
 <input name="authenticity_token" type="hidden" value=""></div>
    
    <div id="form-content">
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"> <input id="category_name" name="category_name" value="<?=$record['emp_cat_type']?>" size="30" type="text" class="validate[required]  text-input"> </div>
      </div>

      <div class="label-field-pair">
        <label for="category_prefix">Prefix</label>
        <div class="text-input-bg"> <input id="category_prefix" name="category_prefix" value="<?=$record['emp_cat_desc']?>" size="30" type="text" class="validate[required]  text-input"> </div>
      </div>

      <div class="label-checkbox-pair">
        <label class="status" for="status">Status</label>
        <div id="radio-buttons">
          <input  id="category_status_true" name="category[status]" type="radio" value="1" class="validate[required] radio">
          <label class="label_for_status" for="add_grade_status_true">Active</label>

          <input id="category_status_false" name="category[status]" type="radio" value="0" class="validate[required] radio">
          <label class="label_for_status" for="add_grade_status_false">Inactive</label>
        </div>
      </div>

      <div id="submit-button">
        <input name="commit" type="submit" value="► Update">
      </div>
    </div>


</form>

<?php } ?>


<div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
  </div>
      </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>
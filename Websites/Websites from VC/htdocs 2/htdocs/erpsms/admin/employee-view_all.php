<?php 
//Department table be used
$emp_dept = new Main(); 
$newsRecordSet = $emp_dept->getdata('*',"emp_dept","","dept_code DESC", "50");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/#.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  <script type="text/javascript">
    $(function()
    {
        $('#link_content').colorbox({opacity:0.3});
    });
	 $(function()
    {
        $('#link_Create_paticular').colorbox({opacity:0.3});
    });
	

function showfeecat(str)
{

if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {


  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {   
	var a= xmlhttp.responseText;

   document.getElementById("students").innerHTML=xmlhttp.responseText;
   document.getElementById('load').style.display = "none";
    }
	else 
	document.getElementById('load').style.display = "block";
  }
xmlhttp.open("GET","?page=student_view_div&emp_dept_employee="+str,true);
xmlhttp.send();
//alert(emp_dept_payslip);
}	
</script>
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar5.php")?>
           
      <!-- end of side bar -->
      
      
      <div id="fullcontent"> 
<div id="content-header">
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>View all</h1>
  <h3>View all</h3>
  <div id="app-back-button">
  <a href="http://demo.fedena.com/employee/view_all#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="fullpage-yield">
       <div class="label-field-pair">
  <label>Select department : </label>
<div class="text-input-bg"><select id="individual_payslip_department_id" name="individual_payslip_department_id" onChange="showfeecat(this.value)" >
      <option value="">Select</option>
<?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>
        
<option value="<?=$record['dept_desc']?>"><?=$record['dept_desc']?></option>

<?php }?>  
</select>
  </div>
  
     <div id="load" style="display:none">  
  <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif">
  </div>
  
  <div id="students">

<div class="students-table">
 <!-- Student list -->
</div>
</div>

</div>

</form></div></div>

      <div class="extender"></div>
    </div>


  <?php include("include/footer.php")?>
           
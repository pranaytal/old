<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

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
  <img alt="Reminder_small" src="../images/reminder/reminder_small.png">
  <h1>Task Management</h1>
  <h3>All Tasks</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

  <div id="inner-tab-menu">
    <ul>
      <li><a href="?page=tasks-new">New Task</a></li>
    </ul>
  </div>

<div id="page-yield">

  

  <div class="box">
    <form action="./tasks_files/tasks.htm" method="get">
      <div class="label-field-pair">
        <label for="filter">Filter by </label> <div class="text-input-bg">
          <select id="filter_assigned_tasks" name="filter_assigned_tasks" onChange="new Ajax.Request(&#39;/tasks/list_assigned_tasks&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;filter_assigned_tasks=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;sZFPxPWh30tAllbRpaqOCuodbvivJLocCfe5Ebt0weU=&#39;)})"><option value="All">All</option>
<option value="Assigned">Assigned</option>
<option value="Completed">Completed</option>
<option value="Due date">Due Date</option></select>
        </div>
      </div>
    </form>
    <div id="list_assigned_tasks"> <ul id="category-list">
      <li class="listodd">Tasks assigned to me</li>
      
      <li class="listeven"></li>
    </ul>
</div>

    <div class="label-field-pair">
      <label for="filter">Filter by </label>
      <div class="text-input-bg">
<select id="filter_tasks" name="filter_tasks" onChange="new Ajax.Request(&#39;/tasks/list_created_tasks&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;filter_tasks=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;sZFPxPWh30tAllbRpaqOCuodbvivJLocCfe5Ebt0weU=&#39;)})"><option value="All">All</option>
<option value="Assigned">Assigned</option>
<option value="Completed">Completed</option>
<option value="Due Date">Due Date</option></select>      
</div>
    </div>
    <div id="list_created_tasks"><ul id="category-list">
  <li class="listodd">Tasks assigned by me</li>
  <div id="task-list">
    
  </div>
  <li class="listeven">
    
  </li>
</ul>
</div>
  </div>
  <div class="extender"></div>
</div>
 </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>
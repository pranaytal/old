<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="UPPR" />
    <link  rel="icon" type="image/png" href = "images/dice.png"/>
	<title>uppAuction - Create User</title>
    <style type="text/css">-a
a:hover{background-color: #ECFECB;}
a{color: #6F1702;text-decoration: none}
</style>
</head>
<?php
	if(isset($_COOKIE['user']))
    {if(isset($_POST['sub'])){
 ?>
       
<body alink="white" vlink="white" link="white">
<center><div align="center" style="height: 90px; width:1024"> 
<img src="images/t1.jpg" alt="Logo" width="1036" height="89">
</div>
<?php
include_once "db.php"; 
$u_name	=  $_POST['u_name'];
$u_pass	=  $_POST['u_pass'];
$user_type	=  $_POST['user_type'];
$link=mysql_connect("$SERVER","$USER","$PASSWORD");
mysql_select_db("$DATABASE");
//echo "Look for the user in the users table.";
$query = "INSERT INTO login VALUES ('$u_name','$u_pass','$user_type')";
$result = mysql_query($query);
?>
<div style="background-repeat: no-repeat; height: 45px; width:1024; background-image:url(images/menu.jpg); background-position:center; color: #FFF;">
  <table width="1024" height="44" border="0" align="center">
    <tr>
      <td width="157" align="center" style="background-color: #00A652;">Create User </td>
      <td width="170" align="center"><a href="Delete User.php">Delete User</a></td>
      <td width="171" align="center"><a href="change_password admin.php">Settings </a></td>
      <td width="159" align="center"><a href="index.php"><?php
										echo $_COOKIE["user"]." logout";
										?></a></td>
    </tr>
  </table>
</div>
<div align="center" style="border: black; border-style: groove; height: 200px; width: 1024px; margin-top:3px;  padding-top: 5px;"  >
<h1 align="center" style="color: #000;">User <u><?php echo $_POST['u_name']; ?></u> Successfully Created</h1>
<hr  width="80%"/>
<br />
<form method="post" action="Create User.php" >
<table width="500" cellspacing="5" style="height: 20px; border-bottom: black;">
<tr><td height="45" colspan="2" align="center"><center><br ><input type="submit" name="create" value="Create New"/></center></td></tr>
</table>
</form></div>
<?php
	if(isset($_POST['create']))
    {
        unset($_POST['sub']);
    }
?>
<div style="margin-top: 10px;width: 1024px;height:200px"></div>
<div style="margin-top: 10px; background-color: #0000FF;; color:#000000; font-size: x-small;width: 1024px;">
<center>
  Best viewed on  Google Chrome 21 and higher<br/>At 1366 &times; 768 resolution <br />
copyright upp &copy; 2012 
</center></div>
       <?php
	}else{
?>

<body alink="white" vlink="white" link="white">
<center><div align="center" style="height: 90px; width:1024"> 
<img src="images/t1.jpg" alt="Logo" width="1036" height="89">
</div>
<div style="background-repeat: no-repeat; height: 45px; width:1024; background-image:url(images/menu.jpg); background-position:center; color: #FFF;">
  <table width="1024" height="44" border="0" align="center">
    <tr>
      <td width="157" align="center" style="background-color: #00A652;">Create User </td>
      <td width="170" align="center"><a href="Delete User.php">Delete User</a></td>
      <td width="171" align="center"><a href="change_password admin.php">Change Password</a></td>
      <td width="159" align="center"><a href="index.php"><?php
										echo $_COOKIE["user"]." logout";
										?></a></td>
    </tr>
  </table>
</div>
<div align="center" style="border: black; border-style: groove; height: 300px; width: 1024px; margin-top:3px;  padding-top: 5px;"  >
<h1 align="center" style="color: #000;">Create User</h1>
<hr  width="80%"/>
<br />
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<table width="500" cellspacing="5" style="height: 20px; border-bottom: black;">
<tr>
  <td width="173"> &nbsp;&nbsp;Enter User Name</td>
  <td width="306" align="center"><input  type="text" name="u_name" id="u_name" style="width: 180px;"/> &nbsp; &nbsp; </td></tr>
<tr>
  <td> &nbsp; Enter password</td>
  <td align="center"><input  type="password" name="u_pass" id="u_pass" style="width: 180px;"/> &nbsp; &nbsp; </td></tr>
<tr>
  <td> &nbsp;&nbsp;Account Type</td>
  <td align="center">                       <select name="user_type" style="width: 180px;">
                                            <option value="bidder" selected>Bidder</option>
                                            <option value="observer">Observer</option>
                                            <option value="admin">Admin</option>
                                            
                                            </select> &nbsp; &nbsp; </td></tr>

<tr><td height="45" colspan="2" align="center"><center><br ><input type="submit" name="sub" value="Create"/></center></td></tr>
</table>
</form></div>

<div style="margin-top: 10px;width: 1024px;height:200px"></div>
<div style="margin-top: 10px; background-color: #0000FF;; color:#000000; font-size: x-small;width: 1024px;">
<center>
  Best viewed on  Google Chrome 21 and higher<br/>At 1366 &times; 768 resolution <br />
copyright upp &copy; 2012 
</center></div>
<?php
}
}
else { header('location:index.php');
  }
?>  
</body>
</html>
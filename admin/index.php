<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="images/favicon.ico" rel="shortcut icon" />
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
</head>

<body topmargin="25" style="background-color:#ffffff">
<!-- Header --->
<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center">
  <tr>
    <td valign="middle"><img src="images/logo.png" style="height:100px; width:100px;" /><font color="#009900" style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:36px; padding-left:1em;"><b>MPSP Maintenance Management System</b></font></td>
  </tr>
</table>

<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center" style="padding-top:10px;">
  <tr>
    <td><img src="images/bar.png" style="height:8px; width:100%;" /></td>
  </tr>
</table>

<!-- Login Form --->
<form action="login-exec.php" enctype="multipart/form-data" name="login" method="post">
<table width="25%" border="0" cellspacing="4" cellpadding="4" align="center" style="margin-top:50px;">
  <tr>
    <td width="25%"><h3 style="color:#009900;">Login</h3></td>
  </tr>
  <tr>
    <td><b>Username</b></label></td>
  </tr>
  <tr>
    <td><input type="text" name="txtUsername" required="" autofocus /></td>
  </tr>
  <tr>
    <td><b>Password</b></td>
  </tr>
  <tr>
    <td><input type="password" name="txtPassword" required="" /></td>
  </tr>
  <tr>
    <td>
    	<input type="submit" value="Login" class="btn" style="color:#FFF; background-color:#009900;" />
        <?php
			error_reporting(E_ERROR);
			if($_REQUEST['error'] == "1")
			{
				echo '<font color="#FF0000" style="padding-left:20px;">Wrong Username or Password ?</font>';	
			}			
		?>
    
    </td>
  </tr>
</table>
</form>

<!-- Footer --->
<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center" style="margin-top:50px;">
  <tr>
    <td><img src="images/bar.png" style="height:8px; width:100%;" /></td>
  </tr>
</table>

<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center" style="margin-top:20px;">
  <tr>
    <td align="right">&copy; 2014 Majlis Perbandaran Sebrang Perai (MPSP)</td>
    <!--<td align="right"><font style="color:#666;"><a href="terms.php" title="Terms & Conditions" style="color:#666;" >Terms & Conditions</a></font></td> -->
  </tr>
</table>
</body>
</html>
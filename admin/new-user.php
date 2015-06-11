<?php
	include_once("header.php");
?>
<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center" style="margin-top:10px;">
  <tr>
    <td style="color:#009900; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"><h4><a href="users.php"> USERS</a> &nbsp;<i class="icon-chevron-left" style="vertical-align:middle; padding-bottom:5px;"></i> &nbsp;NEW USER</h4></td>
  </tr>
</table>

<form action="" method="post">
  <table width="60%" border="0" cellspacing="4" cellpadding="4" style="margin-top:20px;">
    <tr>
      <td style="color:#009900; padding-left:30px;" width="20%" align="right" valign="middle">First Name:</td>
      <td><input name="txtfirstname" type="text" value="<?php echo isset($_POST['txtfirstname']) ? $_POST['txtfirstname'] : '' ?>" style="width:300px; height:30px;" autofocus required autocomplete="off" alt="First Name" /></td>
    </tr>
    <tr>
      <td style="color:#009900; padding-left:30px;" width="20%" align="right" valign="middle">Last Name:</td>
      <td><input name="txtlastname" type="text" value="<?php echo isset($_POST['txtlastname']) ? $_POST['txtlastname'] : '' ?>" style="width:300px; height:30px;" required autocomplete="off" /></td>
    </tr>
    <tr>
      <td style="color:#009900; padding-left:30px;" width="20%" align="right" valign="middle">Username:</td>
      <td><input name="txtusername" type="text" value="<?php echo isset($_POST['txtusername']) ? $_POST['txtusername'] : '' ?>" style="width:300px; height:30px;" required autocomplete="off" /></td>
    </tr>
    <tr>
      <td style="color:#009900; padding-left:30px;" width="20%" align="right" valign="middle">Password:</td>
      <td><input name="txtpass" type="password" value="<?php echo isset($_POST['txtpass']) ? $_POST['txtpass'] : '' ?>" style="width:300px; height:30px;" required autocomplete="off" /></td>
    </tr>
    <tr>
      <td style="color:#009900; padding-left:30px;" width="20%" align="right" valign="middle">Confirm-Password:</td>
      <td><input name="txtcpass" type="password" value="<?php echo isset($_POST['txtcpass']) ? $_POST['txtcpass'] : '' ?>" style="width:300px; height:30px;" required autocomplete="off" /></td>
    </tr>
    <tr>
      <td style="color:#009900; padding-left:30px;" width="20%" align="right" valign="middle">User Type:</td>
      <td>
          <select name="user_type" required style="width:312px;">
           <option selected="selected"></option>
           <option value="Admin">Administrator</option>
           <option value="Guest">Guest</option>
          </select>
      </td>
    </tr>
    <tr>
      <td width="30%" valign="top">&nbsp;</td>
      <td width="70%"><button type="submit" name="Save" class="btn" style="color:#FFF; background-color:#090;"><i class="icon-ok icon-white"></i> Save User</button></td>
    </tr>
  </table>
</form>
  
<?php
   //Click on SAVE Button
   if(isset($_REQUEST['Save']))
   {
	  $firstname = $_POST['txtfirstname'];
	  $lastname = $_POST['txtlastname'];
	  $username = $_POST['txtusername'];
	  $pass = $_POST['txtpass'];
	  $cpass = $_POST['txtcpass'];
	  $user_type = $_POST['user_type'];
	  
	  if($pass != $cpass)
	  { ?>
		 <script type="text/javascript"> 
		  $(document).ready(function() {
			  MatchPassword();
		  });
	   </script>
	  <?php
      }
	  else
	  {
	  	Insert_Query("tbl_users","firstname,lastname,username,password,type","'".$firstname."','".$lastname."','".$username."','".$pass."','".$user_type."'");
	  }
   }
  
   //INSERT DATA INTO DATABASE
   function Insert_Query($table,$columns,$values)
   {
	  $sql = mysql_query("INSERT INTO $table($columns) VALUES ($values)");
	  if($sql)
	  { ?>
		  <script type="text/javascript"> 
		  $(document).ready(function() {
			  Success();
		  });
	   </script>       
	  <?php 
	  }
	  else
	  { ?>
	  
		  <script type="text/javascript"> 
		  $(document).ready(function() {
			  Error();
		  });
	   </script>
	  <?php	
	  }
   }
  
   include_once("footer.php");  
?>
<!--/******************** START [Display The Messagebox After Successfully Submit the Record ] ***/ --> 
<script src="js/jquery.msgBox.js" type="text/javascript"></script>
<link href="css/msgBox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript"> 
		function Success() {
            $.msgBox({
                title: "Success",
                content: "User Added Successfully!",
                type:"info"
            });
        }	
		
		function Error() {
            $.msgBox({
                title: "Error",
                content: "Database Query Error",
                type:"error"
            });
        }	
		
		function MatchPassword() {
            $.msgBox({
                title: "Error",
                content: "Password not Match",
                type:"error"
            });
        }	
 </script> 
<!--/******************** END [Display The Messagebox After Successfully Submit the Record] ******/ --> 
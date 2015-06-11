<?php
	include_once("header.php");
?>
<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center" style="margin-top:10px;">
  <tr>
    <td style="color:#009900; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"><h4><a href="welcome.php">HOME</a> &nbsp;<i class="icon-chevron-left" style="vertical-align:middle; padding-bottom:5px; padding-bottom:5px;"></i>&nbsp;USERS LIST</h4></td>
    <td align="center"><a href="new-user.php" class="heading" style="text-decoration:none; font-weight:normal; color:#5F1577">Create New User &nbsp;<i class="icon-plus"></i></a></td>
  </tr>
</table>    

<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center" style="margin-top:5px;" class="table-top-heading">
  <tr>
    <td style="color:#009900; padding-left:30px;">
    	<table width="100%" border="0" cellspacing="4" cellpadding="4">
          <tr>            
            <td width="22%">First Name</td>
            <td width="22%" style="text-align:center;">Last Name</td>
            <td width="22%" style="text-align:center;">Username</td>
            <td width="20%" style="text-align:center;">User Type</td>
            <td width="14%" style="text-align:center;">Action</td>
          </tr>
        </table>
    </td>
  </tr>
</table> 

<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center" class="table-bodering">
  <tr>
    <td style="vertical-align:text-top;">
    	<table width="100%" border="1" cellspacing="4" cellpadding="4" style="border-color:#DCDCDC;" class="table table-bordered" >
          <?php
		  	$sql = mysql_query("SELECT * FROM tbl_users");
			while($row = mysql_fetch_array($sql))
			{
				$Fname = $row['firstname'];
				$Lname = $row['lastname'];				
				$user_name = $row['username'];
				$type = $row['type'];
				
			?>
          <tr class="highlight">
            <td width="22%" style="padding-left:30px;"><?php echo $Fname; ?></td>
            <td width="22%" style="text-align:center;"><?php echo $Lname; ?></td>
            <td width="22%" style="text-align:center;"><?php echo $user_name; ?></td>
            <td width="20%" style="text-align:center;"><?php echo $type; ?></td>
            <td width="14%" style="text-align:center;"><a href="#"><img src="images/edit-user-icon.png" style="border:none; cursor:pointer; height:24px; width:24px;" title="Edit User" /></a>&nbsp;&nbsp;<a href="#"><img src="images/change-password-icon.png" style="border:none; cursor:pointer; height:24px; width:24px;" title="Change Password" /></a>&nbsp;&nbsp;<a href="#"><img src="images/delete-user-icon.png" style="border:none; cursor:pointer; height:24px; width:24px;" title="Delete User" /></a></td>
          </tr>
         <?php } ?> 
         </table>
     </td>
   </tr>       
</table>   

<?php
 	include_once("footer.php");
?>
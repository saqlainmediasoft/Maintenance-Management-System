<?php
	include_once("header.php");
	$user_id = $_SESSION['SESS_USER_ID'];
?>

<style type="text/css">
div.scrollWrapper
{
  height:550px;
  overflow:scroll;
}
</style>

<style type="text/css">
 .foo:hover 
  { 
	background-color: #FC0; 
	color:#fff;
	cursor:pointer;	
  }
  .hilite 
  {
    background: none repeat scroll 0 0 #FC0;
  }
</style>

<script type="text/javascript">
$(document).ready(function() {
   $('.foo').click(function () {
      $(this).siblings('.foo').removeClass('hilite');
      $(this).toggleClass('hilite');
   });
}); 

$(function(){
    $('#user_id').trigger('click');
});
</script>

<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center" style="margin-top:10px;">
  <tr>
    <td style="color:#009900; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"><h4><a href="welcome.php"> HOME</a> &nbsp;<i class="icon-chevron-left" style="vertical-align:middle; padding-bottom:5px;"></i> &nbsp; ATTENDANCE REPORT</h4></td>
    <!--<td align="center"><a href="new-departure.php" class="heading" style="text-decoration:none; font-weight:normal; color:#5F1577">TAMBAH BAS BERLEPAS &nbsp;<i class="icon-plus"></i></a>&nbsp;</td>-->
  </tr>
</table>    
<table width="95%" border="1" cellspacing="0" cellpadding="0"  align="center" class="table-bodering">
  <tr>
  	<td width="15%" valign="top">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0"  align="center" class="table-heading-straight">
          <tr>
            <td align="center" style="color:#000;">User List</td>
          </tr>
         </table> 
         <table width="100%" border="1" cellspacing="4" cellpadding="4" style="border-color:#DCDCDC;" class="table table-bordered"> 
           <?php
		 	$qry = mysql_query("SELECT * FROM tbl_users");
			while($row = mysql_fetch_array($qry))
			{
				$user_id = $row['user_id'];
				$firstname = $row['firstname'];
				$lastname = $row['lastname'];				
				$username = $row['username'];
				$type = $row['type'];
			?>
             <tr style="font-size:12px; font-weight:bold; cursor:pointer;" id="user_id" class="foo" onClick="document.getElementById('iframeID').src='attendance-report-detail.php?user_id=<?php echo $user_id; ?>&lati=10&longi=10'; return false;">
	            <td style="padding-left:10px; color:#000000;" width="20%"><?php echo $firstname."&nbsp;".$lastname; ?></td>
           <?php } ?>
          </tr>
        </table>    
    </td>
    <td width="85%" valign="top">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0"  align="center" class="table-heading-straight">
          <tr>
            <td>
                <table width="100%" border="0" cellspacing="4" cellpadding="4">
                  <tr>
                    <td style="color:#009900; padding-left:30px;" width="60%">Junction Name</td>
                    <td width="15%" align="center">Date</td>
                    <td width="15%" align="center">Time</td>
                    <td width="10%" align="center">Action</td>
                  </tr>
                </table>
            </td>
          </tr>
        </table>        
        <table width="100%" border="0" cellspacing="4" cellpadding="4" style="border-color:#DCDCDC;" class="table table-bordered">
         <tr>
            <td>
            	<iframe width="100%" height="530" scrolling="yes" src="attendance-report-detail.php" style="overflow:scroll;" frameborder="0" id="iframeID"></iframe>
            </td>            
          </tr>
        </table>
    </td>
  </tr>
</table> 
<?php
	include_once("footer.php");
?>
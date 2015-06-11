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
    $('#junc_id').trigger('click');
});
</script>

<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center" style="margin-top:10px;">
  <tr>
    <td style="color:#009900; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"><h4><a href="welcome.php"> HOME</a> &nbsp;<i class="icon-chevron-left" style="vertical-align:middle; padding-bottom:5px;"></i> &nbsp; JUNCTION REPORT</h4>
    </td>
  </tr>
</table>    

<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center" class="table-bodering">
  <tr>
  	<td width="30%" valign="top">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0"  align="center" class="table-heading-straight">
          <tr>
            <td align="center" style="color:#000;">Junction List</td>
          </tr>
         </table> 
        <div class="scrollWrapper">
         <table width="100%" border="0" cellspacing="4" cellpadding="4" style="border-color:#DCDCDC;" class="table table-bordered" height="100"> 
           <?php
		 	$qry = mysql_query("SELECT * FROM tbl_junction");			
			while($row = mysql_fetch_array($qry))
			{
				$junc_id = $row['junc_id'];
				$junc_name = $row['junc_name'];
			?>
            <tr style="font-size:12px; font-weight:bold; cursor:pointer;" id="junc_id" class="foo" onClick="document.getElementById('iframeID').src='junction-report-detail.php?junc_id=<?php echo $junc_id; ?>'; return false;">
	            <td style="padding-left:10px; color:#000000;" width="20%"><?php echo $junc_name; ?></td>          
          </tr>
           <?php } ?>
        </table>    
        </div>
    </td>
    <td width="70%" valign="top">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0"  align="center" class="table-heading-straight">
          <tr>
            <td>
                <table width="100%" border="0" cellspacing="4" cellpadding="4">
                  <tr>
                    <td width="15%" align="center">Employee Name</td>
                    <td width="20%" align="center">Fault</td>
                    <td width="35%" align="center">Fault Reason</td>
                    <td width="10%" align="center">Report No</td>
                    <td width="10%" align="center">Date</td>
                    <td width="10%" align="center">Time</td>                    
                  </tr>
                </table>
            </td>
          </tr>
        </table>        
        <table width="100%" border="0" cellspacing="4" cellpadding="4" style="border-color:#DCDCDC;" class="table table-bordered">
          <tr>
            <td>
            	<iframe width="100%" height="530" scrolling="no" src="junction-report-detail.php" style="overflow:scroll;" frameborder="0" id="iframeID"></iframe>
            </td>  
          </tr>
        </table>
    </td>
  </tr>
</table> 

<?php
	include_once("footer.php");
?>
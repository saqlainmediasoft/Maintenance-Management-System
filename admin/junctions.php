<?php
	include_once("header.php");
?>
<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center" style="margin-top:10px;">
  <tr>
    <td style="color:#009900; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"><h4><a href="welcome.php">HOME</a> &nbsp;<i class="icon-chevron-left" style="vertical-align:middle; padding-bottom:5px;"></i>&nbsp;JUNCTIONS LIST</h4></td>
    <td align="center"><a href="new-junction.php" class="heading" style="text-decoration:none; font-weight:normal; color:#5F1577">Create New Junction &nbsp;<i class="icon-plus"></i></a></td>
  </tr>
</table>    

<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center" style="margin-top:5px;" class="table-top-heading">
  <tr>
    <td style="color:#009900; padding-left:30px;">
    	<table width="100%" border="0" cellspacing="4" cellpadding="4">
          <tr>
            <td width="70%">Junction Name</td>
            <td width="10%" style="text-align:center;">Latitude</td>
            <td width="10%" style="text-align:center;">Longitude</td>
            <td width="10%" style="text-align:center;">Action</td>
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
		  	$sql = mysql_query("SELECT * FROM tbl_junction ORDER BY junc_name ASC");
			while($row = mysql_fetch_array($sql))
			{
				$junc_name = $row['junc_name'];
				$lati = $row['lati'];
				$longi = $row['longi'];
			?>
          <tr class="highlight">
            <td width="70%" style="padding-left:30px;"><?php echo $junc_name; ?></td>
            <td width="10%" style="text-align:center;"><?php echo $lati; ?></td>
            <td width="10%" style="text-align:center;"><?php echo $longi; ?></td>
            <td width="10%" style="text-align:center;"><img src="images/update.png" style="border:none; cursor:pointer; height:24px; width:24px;" title="Edit Junction" />&nbsp;|&nbsp;<img src="images/trash.png" style="border:none; cursor:pointer;" title="Delete Junction" /></td>
          </tr>
         <?php } ?> 
         </table>
     </td>
   </tr>       
</table>   

<?php
 	include_once("footer.php");
?>
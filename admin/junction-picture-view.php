<?php
	include_once("config.php");	
	$path = "../uploads/"
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Junction Fault History</title>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body>
<table width="100%" border="1" cellspacing="4" cellpadding="4" style="border-color:#DCDCDC;" class="table table-bordered" align="center">
  <tr style="font-size:12px;"> 
	 <?php
        $i = 1;
        $qry = mysql_query("SELECT * FROM tbl_picture WHERE junc_id = '".$_REQUEST['junc_id']."' ORDER BY pic_id DESC ");
		$count = mysql_num_rows($qry);
		if($count > 0)
		{
			while($row = mysql_fetch_array($qry))
			{
				$i++;
				$pic_name = $row['pic_name'];
			?>
		
			<td class="highlight" style="padding:10px 10px 10px 10px; text-align:left;">
				<a href="<?php echo $path.$pic_name; ?>" target="_new"><img src="<?php echo $path.$pic_name; ?>" style="height:140px; width:140px;" border="1" /></a>
		  <?php
			if($i > 6)
			{
				echo "</td></tr>";
				$i=1;
			}
			else
			{
				echo "</td>";
			}
			
		  ?>  
		  
		  <?php } 
	  }
	  else
	  {
		  echo '<font color="#FF0000"><h4>No Picture Found</font></h4>';
	  }
	  
	  ?>
</table>
</body>
</html>

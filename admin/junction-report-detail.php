<?php
	include_once("config.php");	
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
<table width="100%" border="1" cellspacing="4" cellpadding="4" style="border-color:#DCDCDC;" class="table table-bordered">
 <?php
    $qry = mysql_query("SELECT * FROM tbl_fault_report WHERE junc_id = '".$_REQUEST['junc_id']."' ORDER BY rep_id DESC ");
    while($row = mysql_fetch_array($qry))
    {
        $description = $row['description'];
        $reportno = $row['reportno'];
        $r_date = $row['date'];
        $r_time = $row['time'];
        $fault_id = $row['fault_id'];
        $user_id = $row['user_id'];
    ?>
  <tr style="font-size:12px;" class="highlight">
    <td style="padding-left:5px;" width="15%"><?php echo MatchUser($user_id); ?></td>
    <td width="20%" style="text-align:center; font-weight:900;"><?php echo Fault($fault_id); ?></td>
    <td width="35%" style="text-align:left;"><?php echo $description; ?></td>
    <td width="10%" style="text-align:center;"><?php echo $reportno; ?></td>
    <td width="10%" style="text-align:center;"><?php echo $r_date; ?></td>
    <td width="10%" style="text-align:center;"><?php echo $r_time; ?></td>  
  </tr>
  <?php } ?>
</table>
</body>
</html>
<?php
	//Fetch User First & Last Name from [tbl_users]
	function MatchUser($UID)
	{
		$qry = mysql_query("SELECT * FROM tbl_users WHERE user_id = '".$UID."'");
		while($row = mysql_fetch_array($qry))
		{
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];			

			echo $firstname."&nbsp;".$lastname;
		}
	}
	
	//Fetch Faults from [tbl_fault_list]
	function Fault($faultID)
	{
		$qry = mysql_query("SELECT * FROM tbl_fault_list WHERE fault_id = '".$faultID."'");
		while($row = mysql_fetch_array($qry))
		{
			echo $Fault_Name = strtoupper($row['fault_name']);
		}
	}
?>
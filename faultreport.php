<?php
error_reporting(E_ERROR);
include('config.php');

$Junction = $_REQUEST['junction'];
$FaultName = $_REQUEST['work'];
$Description = $_REQUEST['description'];
$ReportNo = $_REQUEST['reportno'];
$JID = $_REQUEST['JID'];
$UID = $_REQUEST['UID'];
$FindJID = $_REQUEST['find'];

if($Junction != "" && $FaultName != "")
{
	  $sql = "INSERT INTO tbl_fault_report (junction_name,description,reportno,date,time,date_time,fault_id,junc_id,user_id) VALUES ('".$Junction."','".$Description."','".$ReportNo."','".$date."','".$time."','".$date." ".$time."','0','0','".$UID."')";
	  $res = mysql_query($sql);
	  if($res)
	  {
		  SelectJID($Junction);
		  SelectFID($FaultName);
		  echo "Success : Report Submited";		  
	  }
	  else
	  {
		  echo "Error : Query Error";
	  }	
}
else
{
	echo "Error: Report Submiting Problem";
}
	
//Select the Junction ID	
function SelectJID($Junction)
{
	$sql = "SELECT * FROM tbl_junction WHERE junc_name = '".$Junction."'";
	$res = mysql_query($sql);
	$count = mysql_num_rows($res);
	if($count > 0)
	{
		$row = mysql_fetch_array($res);
		$JID = $row['junc_id'];
		UpdateJID($JID);
	}
	else
	{
		echo "Information : Junction Not Found in the List";
	}		
}

//Update the Junction ID [tbl_fault_report]
function UpdateJID($JUNC_ID)
{
	$sql = "SELECT rep_id,junc_id FROM tbl_fault_report ORDER BY rep_id DESC LIMIT 1";
	$res = mysql_query($sql);
	$count = mysql_num_rows($res);
	if($count > 0)
	{		
			$row = mysql_fetch_array($res);
			$REPORT_ID = $row['rep_id'];
			
			$sql1 = "UPDATE tbl_fault_report SET junc_id = '".$JUNC_ID."' WHERE rep_id = '".$REPORT_ID."'";
			mysql_query($sql1);
	}
}


//Select the Fault ID	
function SelectFID($FltName)
{
	$sql = "SELECT * FROM tbl_fault_list WHERE fault_name = '".$FltName."'";
	$res = mysql_query($sql);
	$count = mysql_num_rows($res);
	if($count > 0)
	{
		$row = mysql_fetch_array($res);
		$fault_id = $row['fault_id'];
		UpdateFID($fault_id);
	}
	else
	{
		echo "Information : Fault Not Found in the List \n";
	}		
}

//Update Fault ID in [tbl_fault_report]
function UpdateFID($FaultID)
{
	$sql = "SELECT rep_id,fault_id FROM tbl_fault_report ORDER BY rep_id DESC LIMIT 1";
	$res = mysql_query($sql);
	$count = mysql_num_rows($res);
	if($count > 0)
	{		
		$row = mysql_fetch_array($res);
		$REPORT_ID = $row['rep_id'];
		
		$sql1 = "UPDATE tbl_fault_report SET fault_id = '".$FaultID."' WHERE rep_id = '".$REPORT_ID."'";
		mysql_query($sql1);
	}		
}
?>
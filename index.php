<?php
error_reporting(E_ERROR);
include('config.php');

$Latitude = $_REQUEST['lati'];
$Longitude = $_REQUEST['longi'];
$UID = $_REQUEST['UID'];
$sync = $_REQUEST['sync'];

if($Latitude != "" && $Longitude != "")
{
	$sql = "INSERT INTO tbl_attendance (lati,longi,date,time,date_time,user_id) VALUES ('".$Latitude."','".$Longitude."','".$date."','".$time."','".$date." ".$time."','".$UID."')";
	$res = mysql_query($sql);
	if($res)
	{
		echo "Attendance Approved";
	}
	else
	{
		echo "Query Error";
	}	
}
elseif($sync == 1)
{
	$sql = "SELECT * FROM tbl_junction";
	$res = mysql_query($sql);
	while($row = mysql_fetch_array($res))
	{
		echo $junc_name = $row['junc_name']."~";
	}	
}
else
{
	echo "Error: Please Press the Button Again";
}
?>
<?php
error_reporting(E_ERROR);
include('config.php');
$Username = $_REQUEST['username'];
$Password = $_REQUEST['password'];

if($Username != "" && $Password != "")
{
	$sql = "SELECT * FROM tbl_users WHERE username = '".$Username."' AND password = '".md5($Password)."'";
	$res = mysql_query($sql);
	$Count = mysql_num_rows($res);
	if($Count > 0)
	{
		while($row = mysql_fetch_array($res))
		{
			echo "true";
			echo $UID = $row['user_id'];
//			echo $Fname = $row['firstname'];
//			echo $Lname = $row['lastname'];			
		}	
	}
	else
	{
		echo "Error: Wrong Username or Password";
	}
}
?>
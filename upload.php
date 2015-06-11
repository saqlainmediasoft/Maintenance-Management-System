<?php
error_reporting(E_ERROR);
include('config.php');
$UID = $_REQUEST['UID'];

$uploads_dir = 'uploads/'; //Directory to save the file that comes from client application.
if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) 
{
	$tmp_name = $_FILES["file"]["tmp_name"];
    $name = $_FILES["file"]["name"];
   	$Result = move_uploaded_file($tmp_name, "$uploads_dir/$name");
	
	
	$sql = "SELECT * FROM tbl_junction WHERE junc_name = '".$_REQUEST['junction']."'";
	$res = mysql_query($sql);
	$count = mysql_num_rows($res);
	if($count > 0)
	{
		$row = mysql_fetch_array($res);
		$JID = $row['junc_id'];
		UpdateJID($JID);
	}
	
	$sql = "INSERT INTO tbl_picture (pic_name,junc_id,user_id,date,time,date_time) VALUES ('".$name."','".$JID."','".$UID."','".$date."','".$time."','".$date." ".$time."')";
	$res = mysql_query($sql);
	if($res)
	{
		echo "Success: Picture Upload Successfully!";
	}
	else
	{
		echo "Error: Picture not Uploaded";
	}
	
	
	/*if($_REQUEST["show"]== true)
	{
		$directory = "uploads/";
		//get all image files with a .jpg extension.
		$images = glob($directory ."*.{jpg,jpeg,gif,png,bmp}", GLOB_BRACE); //glob($directory . "{*.jpg,*.gif,*.png,*.jpeg}");
		
		//print each file name
		foreach($images as $image)
		{
		  echo '<img src="'.$image.'" border="1" height="100" width="100">';
		}
	}
	else
	{
		echo "Image Upload Successfully!";
	}*/	
}

//Select the Junction ID	
function SelectJID()
{
	$sql = "SELECT * FROM tbl_junction WHERE junc_name = '".$_REQUEST['junction']."'";
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
	$sql = "SELECT pic_id,junc_id FROM tbl_picture ORDER BY pic_id DESC LIMIT 1";
	$res = mysql_query($sql);
	$count = mysql_num_rows($res);
	if($count > 0)
	{		
		$row = mysql_fetch_array($res);
		$pic_id = $row['pic_id'];
		
		$sql1 = "UPDATE tbl_picture SET junc_id = '".$JUNC_ID."' WHERE pic_id = '".$pic_id."'";
		mysql_query($sql1);
	}
}


//foreach ($_FILES["pictures"]["error"] as $key => $error) 
//{
//  if ($error == UPLOAD_ERR_OK) 
//  {
//     $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
//     $name = $_FILES["pictures"]["name"][$key];
//     move_uploaded_file($tmp_name, "$uploads_dir/$name");
// }
//}
?>


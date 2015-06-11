<?php
error_reporting(E_ERROR);
include('config.php');

$target_path1 = "uploads/";
/* Add the original filename to our target path.
Result is "uploads/filename.extension" */
$target_path1 = $target_path1 . basename( $_FILES['uploaded_file']['name']);
if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_path1)) 
{
    echo "The first file ".  basename( $_FILES['uploaded_file']['name'])." has been uploaded.";
} 
else
{
    echo "There was an error uploading the file, please try again!";
    echo "filename: " .  basename( $_FILES['uploaded_file']['name']);
    echo "target_path: " .$target_path1;
}

/*if($_REQUEST['uri'] != "")
{
	$sql = "INSERT INTO tbl_picture (pic) VALUES ('".$_REQUEST['uri']."')";
	$res = mysql_query($sql);
	if($res)
	{
		echo "Picture Save";
	}
	else
	{
		echo "Query Error";
	}	
}
else
{
	echo " Error : Picture not Save";
}


function Convert($data)
{
	$im = imagecreatefromstring($data);
	if ($im !== false) 
	{
		header('Content-Type: image/png');
		imagepng($im);
		imagedestroy($im);
	}
	else 
	{
    	echo 'An error occurred.';
	}
}*/
?>

<?php
   $base = $_REQUEST['data'];

        echo $base;
        $binary = base64_decode($base);
    header('Content-Type: bitmap; charset=utf-8');
        $file = fopen("image/test.jpg', 'wb'");
        fwrite($file, $binary);
        fclose($file);
        echo '<img src=test.jpg>';
?>


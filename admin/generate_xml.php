<?php
	include_once("config.php");	
	$user_id = $_REQUEST['user_id'];

function parseToXML($htmlStr) 
{ 
  $xmlStr=str_replace('<','&lt;',$htmlStr); 
  $xmlStr=str_replace('>','&gt;',$xmlStr); 
  $xmlStr=str_replace('"','&quot;',$xmlStr); 
  $xmlStr=str_replace("'",'&#39;',$xmlStr); 
  $xmlStr=str_replace("&",'&amp;',$xmlStr); 
  return $xmlStr; 
} 

// Select all the rows in the markers table
$query = "SELECT * FROM tbl_attendance WHERE user_id='".$user_id."'";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
  // ADD TO XML DOCUMENT NODE
  echo '<marker ';
  echo 'name="' . parseToXML("TEST") . '" ';	//$row['name']
  echo 'address="' . parseToXML("Addres") . '" ';	//$row['address']
  echo 'lat="' . $row['lati'] . '" ';
  echo 'lng="' . $row['longi'] . '" ';
  echo 'type="' . $row['type'] . '" ';
  echo '/>';
}

// End XML file
echo '</markers>';

function User()
{
	
}

?>

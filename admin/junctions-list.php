<?php
include("config.php") ;
$return_arr = array();

$fetch = mysql_query("SELECT * FROM tbl_junctions where junc_name like '%" . mysql_real_escape_string($_GET['term']) . "%'");
 
/* Retrieve and store in array the results of the query.*/
while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) 
{
	$row_array['junc_id'] = $row['junc_id'];
	$row_array['value'] = $row['junc_name'];	 
	array_push($return_arr,$row_array);
} 
/* Toss back results as json encoded array. */
echo json_encode($return_arr);
?>
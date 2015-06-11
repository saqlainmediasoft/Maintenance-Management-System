<?php
	include_once("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Junction Fault Report (Pie Chart)</title>
<link type="text/css" rel="stylesheet" href="kendoui/styles/kendo.common.min.css"/>
<link type="text/css" rel="stylesheet" href="kendoui/styles/kendo.bootstrap.min.css"/>	<!----  This CSS for Changing the { Color & Background Color} of Menu at Top -------------->
<script src="kendoui/js/jquery.min.js"></script>
<script src="kendoui/js/kendo.all.min.js"></script>
</head>
<body >
<div align="left" style="width:100%; height:100%;" id="chart"></div>
<script>
$("#chart").kendoChart({
	
	theme: "Silver",
    chartArea: {
    	background: "#F3F2F4"
    },
	title: {
        text: "<?php echo JunctionName($_REQUEST['junc_id']); ?>",
		color: "#009900"
    },
    legend: {
        position: "bottom"
    },
    seriesDefaults: {
        labels: {
            visible: true,
            format: "{0}%",
        }
    },
	seriesDefaults: {
			labels: {
				template: "#= category # - #= kendo.format('{0:P}', percentage)#",
				position: "outsideEnd",
				visible: true,
				background: "transparent"				 
			}
		},
    series: [{
		type: "pie",
        data: [ 
				<?php 
					$qry = "SELECT * FROM tbl_fault_list";
					$res = mysql_query($qry);
					if($res === FALSE) 
					{
						   die(mysql_error()); // Show the Error
					}
					else
					{
						while($row = mysql_fetch_array($res))
						{
							$fault_id = $row['fault_id'];
							$fault_name = $row['fault_name'];  
				?>
						{
							category: "<?php echo $fault_name; ?>",
							//color: "#00FF00",
							value: <?php if($_REQUEST['junc_id']== 0) { echo '<font color="#FF0000">Please Select the Junction from List</font>'; } else { echo FaultCount($fault_id, $_REQUEST['junc_id']); } ?>
						}, 
				<?php } } ?>
		]
    }],
	tooltip: {
				visible: true,
				template: "#= category # - #= kendo.format('{0:P}', percentage) #",	//kendo.format('{0:P}', percentage)
				color: "#fff"
			 }
});
</script>	
</body>
</html>

<?php
	//Count the Junction Fault based on Junction ID
	function FaultCount($FID, $JID)
	{
		$qry = "SELECT COUNT(*) AS COUNT FROM tbl_fault_report WHERE fault_id='".$FID."' AND junc_id='".$JID."'";
		$res = mysql_query($qry);
		if($res === FALSE) 
		{
 			   die(mysql_error()); // Show the Error
		}
		else
		{
			$row = mysql_fetch_array($res);
			echo $COUNT = $row['COUNT'];  
			if($COUNT > 0)
			{
				echo $COUNT;
			}
		}
	}
	
	//Fetch Junctions Name
	function JunctionName($JID)
	{
		$qry = mysql_query("SELECT * FROM tbl_junction WHERE junc_id='".$JID."'");
		if($qry === FALSE) 
		{
 			   die(mysql_error()); // Show the Error
		}
		else
		{
			$row = mysql_fetch_array($qry);
			echo $junc_name = $row['junc_name'];  
		}
    }
?>
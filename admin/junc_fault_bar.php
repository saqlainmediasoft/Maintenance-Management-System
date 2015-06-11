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
<div align="left" style="width:100%;" id="chart1"></div>
<script type="text/javascript">
$("#chart1").kendoChart({
    theme: "Default",
	chartArea: {
    	background: "#F3F2F4",
		/*border: {
		  width: 2,
		  color: "purple"
		}*/
    },
	title: {
        text: "<?php echo JunctionName($_REQUEST['junc_id']); ?>",
		color: "#009900"
    },
    legend: {
        position: "bottom"
    },
    seriesDefaults: {
		type: "column",
        labels: {
            visible: true
            //format: "{0}%"
        }
    },
	categoryAxis: {
			categories: ["Week 1", "Week 2", "Week 3", "Week 4"],
			line: {
				visible: false
			},
			labels: {
				padding: {top: 0}
			}
		},
		tooltip: {
		visible: true,
		format: "{0}%",
		template: "#= series.name #: #= value #",
		color: "#fff"
	},
    series: [			
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
						{	name: "<?php echo $fault_name; ?>",
							data: [<?php echo FaultCount($fault_id,$_REQUEST['junc_id'],$_REQUEST['month']); ?>]
						},
			<?php } } ?>			
		]
});
</script>	
</body>
</html>

<?php
	//Count the Junction Fault By WEEK  based on Junction ID, Fault ID & Month
	function FaultCount($FID, $JID, $Month)
	{
		$qry1 = "SELECT COUNT(*) AS COUNT1 FROM tbl_fault_report WHERE fault_id='".$FID."' AND junc_id='".$JID."' AND DATE BETWEEN '2014-".$Month."-01' AND '2014-".$Month."-07'";
		$res1 = mysql_query($qry1);
		$row1 = mysql_fetch_array($res1);
		$Week1 = $row1['COUNT1']; 
		
		$qry2 = "SELECT COUNT(*) AS COUNT2 FROM tbl_fault_report WHERE fault_id='".$FID."' AND junc_id='".$JID."' AND DATE BETWEEN '2014-".$Month."-08' AND '2014-".$Month."-15'";
		$res2 = mysql_query($qry2);
		$row2 = mysql_fetch_array($res2);
		$Week2 = $row2['COUNT2']; 
		
		$qry3 = "SELECT COUNT(*) AS COUNT3 FROM tbl_fault_report WHERE fault_id='".$FID."' AND junc_id='".$JID."' AND DATE BETWEEN '2014-".$Month."-16' AND '2014-".$Month."-23'";
		$res3 = mysql_query($qry3);
		$row3 = mysql_fetch_array($res3);
		$Week3 = $row3['COUNT3'];
		
		$qry4 = "SELECT COUNT(*) AS COUNT4 FROM tbl_fault_report WHERE fault_id='".$FID."' AND junc_id='".$JID."' AND DATE BETWEEN '2014-".$Month."-24' AND '2014-".$Month."-31'";
		$res4 = mysql_query($qry4);
		$row4 = mysql_fetch_array($res4);
		$Week4 = $row4['COUNT4'];  
		
		echo $Week1.",".$Week2.",".$Week3.",".$Week4;				
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
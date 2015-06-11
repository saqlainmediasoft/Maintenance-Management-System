<?php
	include_once("config.php");	
	$latitude = $_REQUEST['lati'];
	$longitude = $_REQUEST['longi'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Junction Fault History</title>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">

<!-- Stylesheet for POPUP Window -->
<style>
	  /**** For Display MAP   ****/
	  html, body, #map-canvas {
        height: 90%;
        margin: 0px;
        padding: 0px
      }
	  /************************/
	  
	
	.modalDialog {
		position: fixed;
		font-family: Arial, Helvetica, sans-serif;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(0,0,0,0.8);
		z-index: 99999;
		opacity:0;
		-webkit-transition: opacity 400ms ease-in;
		-moz-transition: opacity 400ms ease-in;
		transition: opacity 400ms ease-in;
		pointer-events: none;
	}

	.modalDialog:target {
		opacity:1;
		pointer-events: auto;
	}

	.modalDialog > div {
		width: 50%;
		height:70%;
		position: relative;
		margin: 2% auto;
		padding: 5px 20px 13px 20px;
		border-radius: 10px;
		background: #fff;
		background: -moz-linear-gradient(#fff, #fff);
		background: -webkit-linear-gradient(#fff, #fff);
		background: -o-linear-gradient(#fff, #fff);
	}

	.close {
		background: #606061;
		color: #000;
		line-height: 25px;
		position: absolute;
		right: 5px;
		text-align: center;
		top: 5px;
		width: 24px;
		text-decoration: none;
		font-weight: bold;
		-webkit-border-radius: 12px;
		-moz-border-radius: 12px;
		border-radius: 12px;
		-moz-box-shadow: 1px 1px 3px #000;
		-webkit-box-shadow: 1px 1px 3px #000;
		box-shadow: 1px 1px 3px #000;
	}

	.close:hover { background: #009900; }
</style>

<!---	JS for Display MAP Location Base on { Latitude & Longitude }	--->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>
	var geocoder;
	var map;
	var infowindow = new google.maps.InfoWindow();
	var marker;
	function initialize() {
	  geocoder = new google.maps.Geocoder();
	  var latlng = new google.maps.LatLng(<?php echo $latitude?>,<?php echo $longitude?>);
	  var mapOptions = {
		zoom: 8,
		center: latlng,
		mapTypeId: 'roadmap'
	  }
	  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	}

	function codeLatLng() 
	{
	//  var input = document.getElementById('latlng').value;
	//  var latlngStr = input.split(',', 2);
	  var lat = 2.2573216; //parseFloat(latlngStr[0]);
	  var lng = 102.273593; //parseFloat(latlngStr[1]);
	  var latlng = new google.maps.LatLng(lat, lng);
	  geocoder.geocode({'latLng': latlng}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
		  if (results[1]) {
			map.setZoom(15);
			
			marker = new google.maps.Marker({
				position: latlng,
				map: map
			});
			infowindow.setContent(results[1].formatted_address);
			infowindow.open(map, marker);
		  } else {
			alert('No results found');
		  }
		} else {
		  alert('Geocoder failed due to: ' + status);
		}
	  });
	}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>

</head>

<body onload="codeLatLng();">
	  <table width="100%" border="1" cellspacing="4" cellpadding="4" style="border-color:#DCDCDC;" class="table table-bordered">
         <?php
		 	$qry = mysql_query("SELECT * FROM tbl_attendance WHERE user_id = '".$_REQUEST['user_id']."' ORDER BY id DESC ");
			while($row = mysql_fetch_array($qry))
			{
				$lati = round($row['lati'], 2);
				$longi = round($row['longi'],2);
				$date = $row['date'];
				$time = $row['time'];
			?>
          <tr style="font-size:12px;" class="highlight">
            <td style="padding-left:10px;" width="60%"><?php echo MatchJunction($lati,$longi); ?></td>
            <td width="15%" align="center" style="text-align:center;"><?php echo $date; ?></td>
            <td width="15%" align="center" style="text-align:center;"><?php echo $time; ?></td>  
            <td width="10%" align="center" style="text-align:center;"><a href="?user_id=<?php echo $_REQUEST['user_id']?>&lati=<?php echo $lati;?>&longi=<?php echo $longi?>#openModal" onclick="codeLatLng();" >
            	<img src="images/map_view_icon.png" title="View Location on Google Map" height="32" width="32" style="border:none;"/></a>
            </td>            
          </tr>
          <?php } ?>
	 </table>
	
    <!------------------------- POPUP WINDOW ------------------------------------------->
    <div id="openModal" class="modalDialog">
       <div align="center">
     	 <a href="#close" title="Close Map" class="close">X</a>
      	 <h4 align="left">View Location</h4>
         <div id="map-canvas"></div>
         <div class="modal-body">
            
         </div>
        </div>	
    </div>        
</body>
</html>

<?php
	function MatchJunction($lati,$longi)
	{
		$qry = mysql_query("SELECT * FROM tbl_junction");
		while($row = mysql_fetch_array($qry))
		{
			$junc_name = $row['junc_name'];
			$J_lati = round($row['lati'], 2);
			$J_longi = round($row['longi'], 2);
			
			if($J_lati == $lati && $J_longi == $longi)
			{
				echo $junc_name;
			}
		}
	}
?>
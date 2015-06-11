<?php
	$user_id = $_REQUEST['user_id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Junction Fault History</title>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<!--<script type="text/javascript" src="js/googlemap.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>-->
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript">
    //<![CDATA[
    var customIcons = {
      restaurant: {
        icon: 'images/mm_20_blue.png',
        shadow: 'images/mm_20_shadow.png'
      },
      bar: {
        icon: 'images/mm_20_red.png',
        shadow: 'images/mm_20_shadow.png'
      }
    };

    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(2.257362, 102.248286),
        zoom: 12,
        mapTypeId: 'roadmap'
      });
	  
	  var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("generate_xml.php?user_id=<?php echo $user_id; ?>", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address;
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon,
            shadow: icon.shadow
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }	

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };
	  
	  request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}

    //]]>
  </script>
  
 <style>
body {
    margin: 0; 
    padding: 0
}
html, 
body, 
#map {
    height: 100%; 
    font-family: Arial, sans-serif; 
    font-size: .9em; 
	overflow:hidden;
}
#note { 
    text-align: center;
    padding: .3em; 10px; 
    background: #009ee0; 
}
.bool {
    font-style: italic;
    color: #313131;
}
.info {
    display: inline-block;
    width: 40%;
    text-align: center;
}
.infowin {
    color: #F00;
}
#title,
.bool{
    font-weight: bold;
}
</style> 

</head>
<body onLoad="load()" style="background-color:#F3F2F4;">
  <div id="map" style="width: 100%; height: 550px"></div>
</body>
</html>


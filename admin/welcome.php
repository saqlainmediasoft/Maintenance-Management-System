<?php
	include_once("header.php");
?>
<!-- CSS for Design Home Page -->

<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/style7.css" />
<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />

<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center" style="margin-top:10px;">
  <tr>
    <td style="color:#000; font-style:italic; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif"><h3>Welcome to Maintenance Management System</h3></td>
    <td align="center">
    	<!--<a href="clients.php" class="heading" style="text-decoration:none; font-weight:normal; color:#5F1577">List of Clients &nbsp;<i class="icon-user"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="junctions.php" class="heading" style="text-decoration:none; font-weight:normal; color:#5F1577">List of Junctions &nbsp;<i class="icon-map-marker"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="products.php" class="heading" style="text-decoration:none; font-weight:normal; color:#5F1577">List of Products &nbsp;<i class="icon-shopping-cart"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="cities.php" class="heading" style="text-decoration:none; font-weight:normal; color:#5F1577">List of Cities &nbsp;<i class="icon-flag"></i></a>
        <a href="reporting.php" class="heading" style="text-decoration:none; font-weight:normal; color:#009900">View Reporting &nbsp;<i class="icon-adjust"></i></a>-->
    </td>
  </tr>
</table> 

<style type="text/css">
.Menu{
	/*background:#F3F2F1 url(../images/beige_paper.png) repeat top left;*/
	color: #333;
	font-family: 'Terminal Dosis', Arial, sans-serif;
	font-size: 13px;
}
</style>

<table width="100%" border="0" cellspacing="2" cellpadding="2" class="Menu">
  <tr>
    <td>
    	<div class="container">
            <div class="content">
                <ul class="ca-menu">
                    <li>
                        <a href="attendance-report.php">
                            <span class="ca-icon"><img src="images/attendance.png" height="150" width="150" border="0" /></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Attendance Report</h2>
                                <h3 class="ca-sub">Attendance Report</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="junction-report.php">
                            <span class="ca-icon"><img src="images/track_icon.png" height="150" width="150" border="0" /></span> <!--??-->
                            <div class="ca-content">
                                <h2 class="ca-main">Junction <br />Report</h2>
                                <h3 class="ca-sub">Junction Report</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="user-tracking.php">
                            <span class="ca-icon"><img src="images/user-tracking.png" height="150" width="150" border="0" /></span> <!--zQ-->
                            <div class="ca-content">
                                <h2 class="ca-main">User <br /> Tracking</h2>
                                <h3 class="ca-sub">User Tracking</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="users.php">
                            <span class="ca-icon"><img src="images/userlist-icon.png" height="150" width="150" border="0" /></span> <!--SU-->
                            <div class="ca-content">
                                <h2 class="ca-main">User Account Setting</h2>
                                <h3 class="ca-sub">User Account Setting</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="junctions.php">
                            <span class="ca-icon"><img src="images/junction-list-icon.png" height="150" width="150" border="0" /></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Junction <br /> List</h2>
                                <h3 class="ca-sub">List of All Junctions</h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </div><!-- content -->        
        </div>  
    </td>
  </tr>
  <tr>
  	<td>
    	   <div class="container">
            <div class="content">
                <ul class="ca-menu">
                    <li>
                        <a href="reporting.php">
                            <span class="ca-icon"><img src="images/report-icon.png" height="150" width="150" border="0" /></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Reporting</h2>
                                <h3 class="ca-sub">Reportring</h3>
                            </div>
                        </a>
                    </li> 
                    <li>
                        <a href="junction-picture.php">
                            <span class="ca-icon"><img src="images/picture-icon.png" height="150" width="150" border="0" /></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Junction Picture</h2>
                                <h3 class="ca-sub">Junction Picture</h3>
                            </div>
                        </a>
                    </li> 
                </ul>
            </div><!-- content -->        
        </div>  
    </td>
  </tr>
</table>
<?php
	include_once("footer.php");
?>
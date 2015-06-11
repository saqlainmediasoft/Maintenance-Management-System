<?php
	require_once('config.php');	//Include database Connection Details
	include("auth.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Information System Public Transport | Majlis Perbandaran Kuantan</title>
<link href="images/favicon.ico" rel="shortcut icon" />
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">

<!-- Circle Design -->
<link rel="stylesheet" type="text/css" href="css/effect1.css" />
<link rel="stylesheet" type="text/css" href="css/effect2.css" />

<!-- KendoUI Charts -->
<link type="text/css" rel="stylesheet" href="kendoui/styles/kendo.common.min.css"/>
<link type="text/css" rel="stylesheet" href="kendoui/styles/kendo.bootstrap.min.css"/>	<!----  This CSS for Changing the { Color & Background Color} of Menu at Top -------------->
<script src="kendoui/js/jquery.min.js"></script>
<script src="kendoui/js/kendo.all.min.js"></script>

<!-- Delete Records Without Refreshing Page 
<script type="text/javascript" src="js/jquery-delete.js"></script>-->
<script type="text/javascript">
//FOR DELETE CATEGORY
$(function() {
$(".DeleteCat").click(function(){
//Save the link in a variable called element
var element = $(this);
//Find the id of the link that was clicked
var del_id = element.attr("id");
//Built a url to send
var info = 'DeleteCat=' + del_id;
if(confirm("Are you sure want to delete this Record ?"))
{
 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
}
});
 $(this).parents(".highlight").animate({ backgroundColor: "#5F1577" }, "fast")
.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});

//FOR DELETE SINGLE ENTRY
$(function() {
$(".SingleID").click(function(){
//Save the link in a variable called element
var element = $(this);
//Find the id of the link that was clicked
var del_id = element.attr("id");
//Built a url to send
var info = 'SingleID=' + del_id;
if(confirm("Are you sure want to delete this Record ?"))
{
 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
}
});
 $(this).parents(".highlight").animate({ 'backgroundColor': '#5F1577' }, "fast")
.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});

//FOR DELETE DOUBLE ENTRY
$(function() {
$(".DoubleID").click(function(){
//Save the link in a variable called element
var element = $(this);
//Find the id of the link that was clicked
var del_id = element.attr("id");
//Built a url to send
var info = 'DoubleID=' + del_id;
if(confirm("Are you sure want to delete this Record ?"))
{
 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
}
});
 $(this).parents(".highlight").animate({ backgroundColor: "#5F1577" }, "fast")
.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});

//FOR DELETE MULTIPLE ENTERIES
$(function() {
$(".MultiID").click(function(){
//Save the link in a variable called element
var element = $(this);
//Find the id of the link that was clicked
var del_id = element.attr("id");
//Built a url to send
var info = 'MultiID=' + del_id;
if(confirm("Are you sure want to delete this Record ?"))
{
 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
}
});
 $(this).parents(".highlight").animate({ backgroundColor: "#5F1577" }, "fast")
.animate({ opacity: "hide" }, "slow");

 }

return false;

});
});

</script>

<!-- Title Bar Scrolling Marquee -->
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
var scrl = " Majlis Perbandaran Sebrang Perai (MPSP) :::  ";
function scrlsts() {
 scrl = scrl.substring(1, scrl.length) + scrl.substring(0, 1);
 document.title = scrl;
 setTimeout("scrlsts()", 300);
 }
//  End -->
</script>
</head>

<body onload="scrlsts()" topmargin="25" style="background-color:#F3F2F4">
<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center">
  <tr>
    <td width="75%" valign="bottom"><img src="images/logo.png" style="height:100px; width:100px;" /><font color="#009900" style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:36px; padding-left:1em;"><b>MPSP Maintenance Management System</b></font></td>
    <td width="25%" valign="bottom" align="center"><font style="font-weight:700; color:#009900;">Welcome, </font><font style="color:#666;"><?php echo $_SESSION['SESS_FIRST_NAME']."&nbsp;".$_SESSION['SESS_LAST_NAME'];?> </font> &nbsp;| &nbsp;<font><a href="logout.php" id="element" title="Press to Logout" style="color:#666;">Logout</a></font></td>
  </tr>
</table>

<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center">
  <tr>
    <td><img src="images/bar.png" style="height:8px; width:100%;" /></td>
  </tr>
</table>

<!------------- Quick Menu ------------------------>
<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center" class="demo-section" style="margin-top:25px; margin-bottom:20px;">
  <tr>
    <td><ul id="menu-images"></ul></td>
  </tr>
</table>
<script>
  $("#menu-images").kendoMenu({
	  dataSource: [
		   {
			 text: "Home", imageUrl: "icons/main/home-icon.png", url: "welcome.php",
		  },
		  {
			 text: "Attendance Report", imageUrl: "icons/main/attendance-icon.png", url: "attendance-report.php",
		  },
		  {
			  text: "Junction Report", imageUrl: "icons/main/track-icon.png", url: "junction-report.php",
		  }
		  ,
		  {
			  text: "User Tracking", imageUrl: "icons/main/user-tracking-icon.png", url: "user-tracking.php",
		  },
		  {
			  text: "User Account Setting", imageUrl: "icons/main/userlist-icon.png", url: "users.php",
		  },
		  {
			  text: "Junction List", imageUrl: "icons/main/junction-list-icon.png", url: "junctions.php",
		  },
		  {
			  text: "Reportring", imageUrl: "icons/main/report-icon.png", url: "reporting.php",
		  }
		  ,
		  {
			  text: "Junction Picture", imageUrl: "icons/main/picture-icon.png", url: "junction-picture.php",
		  }
	  ]
  });
</script>
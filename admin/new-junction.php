<?php
	include_once("header.php");
?>
<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center" style="margin-top:10px;">
  <tr>
    <td style="color:#009900; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"><h4><a href="junctions.php"> JUNCTIONS</a> &nbsp;<i class="icon-chevron-left" style="vertical-align:middle; padding-bottom:5px;"></i> &nbsp;NEW JUNCTION</h4></td>
  </tr>
</table>

<form action="" method="post">
  <table width="60%" border="0" cellspacing="4" cellpadding="4" style="margin-top:20px;">
    <tr>
      <td style="color:#009900; padding-left:30px;" width="20%" align="right" valign="middle">Junction Name:</td>
      <td style="padding-left:10px;" valign="bottom"><input type="text" name="txtJuncName" style="width:500px; height:30px;" autofocus required autocomplete="off"/></td>
    </tr>
    <tr>
      <td style="color:#009900; padding-left:30px;" width="20%" align="right" valign="middle">Latitude:</td>
      <td style="padding-left:10px;" valign="bottom"><input type="text" name="txtLati" style="width:200px; height:30px;" required autocomplete="off" /></td>
    </tr>
    <tr>
      <td style="color:#009900; padding-left:30px;" width="20%" align="right" valign="middle">Longitude:</td>
      <td style="padding-left:10px;" valign="bottom"><input type="text" name="txtLongi" style="width:200px; height:30px;" required autocomplete="off" /></td>
    </tr>
    <tr>
    <tr>
      <td width="30%" valign="top">&nbsp;</td>
      <td width="70%"><button type="submit" name="Save" class="btn" style="color:#FFF; background-color:#090;"><i class="icon-ok icon-white"></i> Save Junction</button></td>
    </tr>
  </table>
</form>
<p align="right" style="color:#009900; margin-right:400px;">:*:  Latitude & Longitude can be obtain from Google Map.</p>
<?php
  include_once("footer.php");
   //Click on SAVE Button
   if(isset($_REQUEST['Save']))
   {
	  $txtJuncName = $_POST['txtJuncName'];
	  $txtLati = $_POST['txtLati'];
	  $txtLongi = $_POST['txtLongi'];
	  
	  Insert_Query("tbl_junction","junc_name,lati,longi","'".$txtJuncName."','".$txtLati."','".$txtLongi."'");
   }
  
   //INSERT DATA INTO DATABASE
   function Insert_Query($table,$columns,$values)
   {
	  $sql = mysql_query("INSERT INTO $table($columns) VALUES ($values)");
	  if($sql)
	  { ?>
		  <script type="text/javascript"> 
		  $(document).ready(function() {
			  Success();
		  });
	   </script>       
	  <?php 
	  }
	  else
	  { ?>
	  
		  <script type="text/javascript"> 
		  $(document).ready(function() {
			  Error();
		  });
	   </script>
	  <?php	
	  }
   }
?>
<!--/******************** START [Display The Messagebox After Successfully Submit the Record ] ***/ --> 
<script src="js/jquery.msgBox.js" type="text/javascript"></script>
<link href="css/msgBox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript"> 
		function Success() {
            $.msgBox({
                title: "Success",
                content: "Junction Added Successfully!",
                type:"info"
            });
        }	
		
		function Error() {
            $.msgBox({
                title: "Error",
                content: "Database Query Error",
                type:"error"
            });
        }	
 </script> 
<!--/******************** END [Display The Messagebox After Successfully Submit the Record] ******/ --> 
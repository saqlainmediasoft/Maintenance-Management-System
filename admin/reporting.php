<?php
	include_once("header.php");
?>
<script type="text/javascript" src="js/bootstrap.js"></script>	<!-- JS For Working with TABs Only -->

<script type="text/javascript">
  window.external.callMe();//FOR CALLING IN WINFORMS APPLICATION ONLY
  function PieChart(val) {
	document.getElementById('PieChart').src='junc_fault_pie.php?junc_id='+val;
  }
  
  function BarChart(val) {
	var Month =	document.getElementById('month').value;
	document.getElementById('BarChart').src='junc_fault_bar.php?junc_id='+val+'&month='+Month;
  }
  
  function Month(val)
  {
	  var JID =	document.getElementById('j_id').value;
	  document.getElementById('BarChart').src='junc_fault_bar.php?junc_id='+JID+'&month='+val;
  }
</script>

<table width="95%" border="0" cellspacing="0" cellpadding="0"  align="center" style="margin-top:10px;">
  <tr>
    <td style="color:#009900; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"><h4><a href="welcome.php"> HOME</a> &nbsp;<i class="icon-chevron-left" style="vertical-align:middle; padding-bottom:5px;"></i> &nbsp;REPORT</h4></td>
  </tr>
</table>  

<table width="95%" border="1" cellspacing="0" cellpadding="0"  align="center" class="table-bordered">
  <tr>
    <td width="50%">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="color:#009900; padding-left:15px;"><h5>Junction Fault History <i class="icon-chevron-right" style="vertical-align:top; margin-top:3px;"></i></h5></td>
            <td style="vertical-align:top; padding:7px 0 0 10px; ">
            	<select name="junc_name" required style="width:320px;" onchange="PieChart(value);">
                  <option selected="selected" value="0">Select Junction</option>
                  <?php
				  	echo JunctionName();
				  ?>
                </select>
            </td>
          </tr>
        </table>         
    </td>
    <td width="50%">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="30%" style="color:#009900; padding-left:5px;"><h5>Junction Fault by Months <i class="icon-chevron-right" style="vertical-align:top; margin-top:3px;"></i></h5></td>
            <td style="vertical-align:top; padding:7px 0 0 10px; ">
                <select name="junc_name" required style="width:320px;" onchange="BarChart(value);" id="j_id">
                  <option selected="selected" value="0">Select Junction</option>
                  <?php
                    echo JunctionName();
                  ?>
                </select>                
                <select name="Month" required style="width:150px;" onchange="Month(value);" id="month">
                  <option selected="selected" value="00">Select Month</option>
                  <option value="01">January 2014</option>
                  <option value="02">February 2014</option>
                  <option value="03">March 2014</option>
                  <option value="04">April 2014</option>
                  <option value="05">May 2014</option>
                  <option value="06">June 2014</option>
                  <option value="07">July 2014</option>
                  <option value="08">August 2014</option>
                  <option value="09">September 2014</option>
                  <option value="10">October 2014</option>
                  <option value="11">November 2014</option>
                  <option value="12">December 2014</option>                  
                </select>                
            </td>
          </tr>
        </table>	
    </td>    
  </tr>
</table> 

<table width="95%" border="1" cellspacing="0" cellpadding="0" align="center" class="table-bordered">
  <tr>
    <td width="50%" height="100%" valign="top"><iframe scrolling="no" src="junc_fault_pie.php" style="width:100%; height:400px;" frameborder="0" id="PieChart"></iframe></td>
    <td width="50%" valign="top"><iframe scrolling="no" src="junc_fault_bar.php" style="width:100%; height:400px;" frameborder="0" id="BarChart"></iframe></td>
  </tr>
</table>

<?php
	include_once("footer.php");
	
	//Fetch Junctions Name
	function JunctionName()
	{
		$qry = mysql_query("SELECT * FROM tbl_junction ORDER BY junc_name ASC");
		while($row = mysql_fetch_array($qry))
		{
			$junc_id = $row['junc_id'];
			$junc_name = $row['junc_name'];  
			?>
			<option value="<?php echo $junc_id;?>"><?php echo $junc_name; ?></option>
		<?php
        }
	}
?>

<!-- Display TAB's -->
<!--<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center" style="margin-top:10px;">
  <tr>
    <td>
    	<div class="tabbable">
            <ul id="mytab" class="nav nav-tabs">
              <li class="active"><a href="#pane1" data-toggle="tab">TAB 1</a></li>
              <li><a href="#pane2" data-toggle="tab">TAB 2</a></li>
              <li><a href="#pane3" data-toggle="tab">TAB 3</a></li>
            </ul>
            <div class="tab-content"> 
              <!-- Panel 1
              <div id="pane1" class="tab-pane active">
                <pre>tab 1</pre>
              </div>
              
              <!-- Panel 2
              <div id="pane2" class="tab-pane fade">
                 <pre>tab 2</pre>
              </div>
              
              <!-- Panel 3
              <div id="pane3" class="tab-pane">
                <pre>tab 3</pre>
              </div>
              
            </div>
        <!-- /.tab-content 
      </div>
    </td>
  </tr>
</table>--> 
$(function(){
	// GET ID OF last row and increment it by one
	var $lastChar =1, $newRow;
	$get_lastID = function(){
		var $id = $('#expense_table tr:last-child td:first-child input').attr("name");
		$lastChar = parseInt($id.substr($id.length - 2), 10);
		console.log('GET id: ' + $lastChar + ' | $id :'+$id);
		$lastChar = $lastChar + 1;
		$newRow = "<tr style='border:1px solid #ddd;' bgcolor=\"#666666\"> \
					<td style='border:1px solid #ddd;'><input list='Junctions' name='reg_no_0"+$lastChar+"' required style='width:250px; height:25px;' /></td> \
					<td style='border:1px solid #ddd;' valign='middle'><input type='text' name='subjects_0"+$lastChar+"' required style='width:80px;' maxlength='10' /></td> \
					<td style='border:1px solid #ddd;'><input type='text' name='max_marks_0"+$lastChar+"' required style='width:80px;' /></td> \
					<td style='border:1px solid #ddd;'><input type='text' name='max_obtained_0"+$lastChar+"' required style='width:80px;' /></td> \
					<td style='border:1px solid #ddd;' class='ui-widget'><input type='text' id='prod_name"+$lastChar+"' name='prod_name"+$lastChar+"' class='prod_name' value='prod_name"+$lastChar+"' required style='width:250px;' /></td> \
					<td style='border:1px solid #ddd;'><input type='text' id='prod_unit' name='prod_unit"+$lastChar+"' required style='width:80px; text-align:center; color:#5F1577; font-weight:700;' readonly='readonly' /></td> \
                    <td style='border:1px solid #ddd;'><input type='text' name='max_obtained_0"+$lastChar+"' required style='width:80px;' /></td> \
                    <td style='border:1px solid #ddd;'><input type='text' id='prod_rate' name='prod_rate"+$lastChar+"' required style='width:80px; text-align:center; color:#5F1577; font-weight:700;' readonly='readonly' /></td> \
                    <td style='border:1px solid #ddd;'><input type='text' name='max_obtained_0"+$lastChar+"' required style='width:80px;' /></td> \
					<td style='border:1px solid #ddd;' align='center'><img src='images/remove.png' style='border:none; cursor:pointer;' class='del_ExpenseRow' title='Remove This Row' /></td> \
				</tr>"
		return $newRow;
	}
	
	// ***** -- START ADDING NEW ROWS
	$('#add_ExpenseRow').live("click", function(){ 
		if($lastChar <= 50){
			$get_lastID();
			$('#expense_table tbody').append($newRow);
		} else {
			alert("Can't Add More Rows!");
		};
	});
	
	$(".del_ExpenseRow").live("click", function(){ 
		$(this).closest('tr').remove();
		$lastChar = $lastChar-2;
	});	
});
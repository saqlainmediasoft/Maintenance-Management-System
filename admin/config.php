<?php
 define('DB_HOST', 'localhost');	// HOST NAME
 define('DB_USER', 'root');		// USER NAME
 define('DB_PASSWORD', '');		// PASSWORD
 define('DB_DATABASE', 'db_attendance');	//DATABASE NAME
 mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('Error message: <font color="#FF0000">Can\'t Connect to SERVER</font>'); //CONNECTION TO MYSQL DATABASE
 mysql_select_db(DB_DATABASE) or die('Error message: <font color="#FF0000">Can\'t Connect to Database</font>'); //SELECT THE DATABASE NAME
 
 session_set_cookie_params(0);
 //Start session
 session_start();
 
 ob_start(); //turn output buffering ON {Header cant send error}
 
 //Get Date/Time According to Malaysia
 date_default_timezone_set('Asia/Kuala_Lumpur');
 $date = date("Y-m-d"); 
 $time = date("h:i:s A", time()); 
?>

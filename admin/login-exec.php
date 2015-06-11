<?php	
	//Include database connection details
	require_once('config.php');
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str)
	 {
		$str = trim($str);
		if(get_magic_quotes_gpc()) 
		{
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	 }
	
	//Sanitize the POST values
	$login = clean($_POST['txtUsername']);
	$password = clean($_POST['txtPassword']);
	
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM tbl_users WHERE username='$login' AND password='".md5($_POST['txtPassword'])."'";
	echo $qry;
	$result=mysql_query($qry);

	 //Check whether the query was successful or not
	 if($result)
	 {
		if(mysql_num_rows($result) == 1) 
		{
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			
			$_SESSION['SESS_USER_ID'] = $member['user_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['firstname'];
			$_SESSION['SESS_LAST_NAME'] = $member['lastname'];
			$_SESSION['SESS_USERNAME'] = $member['username'];
			$_SESSION['SESS_USERTYPE'] = $member['type'];
			
			session_write_close();
			header("location: welcome.php");
			exit();
		}
		else
		{
			$errflag = true;
			//Login failed
			header("location: index.php?error=1");
			exit();
		}
	}
	else
	{
		die("Query failed");
	}
?>
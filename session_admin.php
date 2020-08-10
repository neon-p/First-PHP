<?php
	session_start();
	$host = 'localhost';
	$username= 'root';
	$pass = '';
	$db = 'university_addmission';
	
	$cons=new mysqli($host, $username, $pass, $db) or die("not connected");

			$check=$_SESSION["admin"];
			
		if(!empty($check)){
			$sql_a = "SELECT Email FROM `admin` WHERE Email LIKE \"$check\"";
			$sql1_a=$cons->query($sql_a);
			$row_a=$sql1_a->fetch_assoc();
			$f_l_a=$row_a["Email"];
			if(isset($f_l_a)){
				$cons->close();
			}
		}else{
				header("location: Login.php");
				$cons->close();
			}
?>
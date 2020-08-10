<?php
	session_start();
	$host = 'localhost';
	$username= 'root';
	$pass = '';
	$db = 'university_addmission';
	
	$cons=new mysqli($host, $username, $pass, $db) or die("not connected");

			$check=$_SESSION["email"];
			
		if(!empty($check)){
			$sql = "SELECT Email FROM `university_administrator` WHERE Email LIKE \"$check\"";
			$sql1=$cons->query($sql);
			$row=$sql1->fetch_assoc();
			$f_l=$row["Email"];
			if(isset($f_l)){
				$cons->close();
			}
		}else{
				header("location: Login.php");
				$cons->close();
			}
?>
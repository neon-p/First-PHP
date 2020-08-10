<?php
 session_start();
?>
<?php
	
	$host = 'localhost';
	$username= 'root';
	$pass = '';
	$db = 'university_addmission';
	
	$con=new mysqli($host, $username, $pass, $db) or die("not connected");

	
		if(isset($_POST["login_btn"])){
			echo $email = $_POST["Email"];
			echo $password = $_POST["Password"];
			
			
			if(!empty($email) && !empty($password)){
				$sql = "SELECT Pass FROM `university_administrator` WHERE Email LIKE \"$email\"";
				$sql1=$con->query($sql);
				$row=$sql1->fetch_assoc();
				
				if($row["Pass"]== $password){
					$_SESSION["email"]=$_POST["Email"];
					$query = "INSERT INTO login_details(Email, Password) VALUES('$email','$password')";
					if($con->query($query) == TRUE){
						echo "<script>location.href='s_p_i_get_uni.php';</script>";
						echo "<h3>Welcome!</h3>";
					} 
				}else{
					echo "<script>location.href='wrongpass.php';</script>";
				}
			}else{
				echo "All field must be filled up";
			}
			//}
		$con->close();
	
	}
?>
<!DOCTYPE html>
<html>
	<head> 
		<a href="home.php" align="left"><h1>Home</h1></a>
		<link rel="stylesheet" type="text/css" href="style.php"/>
	</head>

<body background="g2.jpg">
	</br><h3>University Addmission</h3>
	<a href="Login.php"></a>
	<div class="main">
		<form method="post" action="Login.php">
			<div class="user">
			<input type="text" placeholder="Enter username" name="Email"><br/>
			</div>
			<div class="pass">
			<input type="password" placeholder="Enter password" name="Password"><br/>
			</div>
			<button  type="submit" class="login" name="login_btn">Login</button></br>
			</br>
			</br>
			<div class="s">
			<a href="U_A_Registration_Form.php"> Sign Up </a>
			</div>
			</br>
			<a href="#"> Forget password? </a>
		</form>
	</div>
</body>

</html>
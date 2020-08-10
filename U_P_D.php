<?php
	include("session.php");
?>

<!DOCTYPE html>

<?php
	
	$host = 'localhost';
	$username= 'root';
	$pass = '';
	$db = 'university_addmission';
	
	$con5=new mysqli($host, $username, $pass, $db) or die("not connected");
	
	
	if(isset($_POST["submit_btn"])){
		echo $b_id = $_POST["Bank_Id"];
		echo $b_n = $_POST["Bank_Name"];
		echo $b_b = $_POST["Branch"];
		echo $b_a = $_POST["Address"];
		
	$b_query = "INSERT INTO `bank`(`Bank_Id`, `Bank_Name`, `Branch`, `Address`)
			VALUES ('$b_id','$b_n','$b_b','$b_a')";
		
		if($con5->query($b_query) == TRUE){
			echo "Bank OK";
			echo "<script>location.href='Thank.php';</script>";
		}
		else{
			echo "Die";
		}
		
		$con5->close();
	}
?>

<html>
	<head> 
	<a href="home.php" align="left"><h1>Home</h1></a>
		<link rel="stylesheet" type="text/css" href="style.php"/>
	</head>

<body background="g2.jpg">
</br><h3>University Paying Details</h3>
	<div class="main5">
		<form method="post" action="U_P_D.php">
			<a href="U_P_D.php"></a>
			<div class="b_id">
			<input type="text" placeholder="Enter Bank Id" name="Bank_Id"><br/>
			</div>
			<div class="b_n">
			<input type="text" placeholder="Enter Bank Name" name="Bank Name"><br/>
			</div>
			<div class="b_b">
			<input type="text" placeholder="Enter Bank Branch" name="Branch"><br/>
			</div>
			<div class="b_a">
			<input type="text" placeholder="Enter Bank Address" name="Address"><br/>
			</div>
			
			<button type="submit" class="login" name="submit_btn">Submit</button></br>
		</form>
	</div>
</body>

</html>
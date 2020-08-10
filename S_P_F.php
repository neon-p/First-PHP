<!DOCTYPE html>

<?php
	
	$host = 'localhost';
	$username= 'root';
	$pass = '';
	$db = 'university_addmission';
	
	$con6=new mysqli($host, $username, $pass, $db) or die("not connected");
	
	
	if(isset($_POST["paying_btn"])){
		$date = $_POST["Date"];
		$Amount = $_POST["Amount"];
		$a_id = $_POST["Id"];
		$s_id = $_POST["id"];
		$b_n = $_POST["B_n"];
	
	if(!empty($date) && !empty($Amount) && !empty($a_id) && !empty($s_id) && !empty($b_n)){
		
		$p_query = "INSERT INTO `paying_details`(`Date`, `Amount`, `Id`, `s_id`, `B_n`) VALUES ('$date', '$Amount', '$a_id', '$s_id', '$b_n')";
		
		if($con6->query($p_query) == TRUE){
			echo "Bank OK";
			echo "<script>location.href='s_paying_information.php';</script>";
		}
		else{
			echo "Die";
		}
	}else{
			echo "All field must be filed up";
	}
		$con6->close();
	}
?>

<html>
	<head> 
	<a href="home.php" align="left"><h1>Home</h1></a>
		<link rel="stylesheet" type="text/css" href="style.php"/>
	</head>

<body background="g2.jpg">
</br><h3>Student Payment</h3>
	<div class="main5">
		<a href="S_P_F.php"></a>
		<form method="post" action="S_P_F.php">
			<div class="date">
			<input type="text" placeholder="Year/Month/date" name="Date"><br/>
			</div>
			<div class="amount">
			<input type="text" placeholder="Enter Amount" name="Amount"><br/>
			</div>
			<div class="Id">
			<input type="text" placeholder="Enter A/C Number" name="Id"><br/>
			</div>
			<div class="Id">
			<input type="text" placeholder="Enter Id" name="id"><br/>
			</div>
			<div>
			<input type="text" placeholder="Enter Branch" name="B_n"><br/>
			</div>
			
			<button type="submit" class="login" name="paying_btn">Pay</button></br>
		</form>
	</div>
</body>

</html>
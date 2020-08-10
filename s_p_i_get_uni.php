<?php
	include("session.php");
?>

<?php
	
	$host = 'localhost';
	$username= 'root';
	$pass = '';
	$db = 'university_addmission';
	
	$con6=new mysqli($host, $username, $pass, $db) or die("not connected");
	
	
	if(isset($_POST["Date"])){
		$date = $_POST["Date"];
		$Amount = $_POST["Amount"];
		$a_id = $_POST["Id"];
		$s_id = $_POST["id"];
		$b_n = $_POST["B_n"];
		$b_b_n = $_POST["B_B_n"];
		
	if(!empty($date) && !empty($Amount) && !empty($a_id) && !empty($s_id) && !empty($b_n) && !empty($b_b)){	
		$p_query = "INSERT INTO `paying_details_from_bank`(`Date`, `Amount`, `Id`, `s_id`, `B_n`, `B_B_n`) VALUES ('$date', '$Amount', '$a_id', '$s_id', '$b_n', '$b_b_n')";
		
		if($con6->query($p_query) == TRUE){
			echo "Bank OK";
		}
		else{
			echo "Die";
		}
	}else{
		echo "All field must be filled up";
	}
		
		$con6->close();
	}
?>

<!DOCTYPE html>
<html>
	<head> 
		<a href="logout.php" align="right"><h3>Logout</h3></a>
		<a href="home.php" align="left"><h1>Home</h1></a>
		<a href="U_D_F.php">If you dont describe your University...Click Here!</a></br>
		<a href="s_Info.php">All Student information</a>
		<link rel="stylesheet" type="text/css" href="style.php"/>
	</head>

<body background="g2.jpg">
</br><h3 style="color:#ffffff;">University Payment Details From Bank</h3>
<a href="s_p_i_get_uni.php"></a>
	<div class="main5">
		<a href="s_p_i_get_uni.php"></a>
		<form method="post" action="s_p_i_get_uni.php">
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
			<div class="Id">
			<input type="text" placeholder="Enter Branch" name="B_n"><br/>
			</div>
			<div class="Id">
			<input type="text" placeholder="Enter Branch" name="B_B_n"><br/>
			</div>
			<div class="login">
			<input type="submit" value="Submit" name="submit_btn"><br/>
			</div>
		</form>
	</div>
</body>

</html>
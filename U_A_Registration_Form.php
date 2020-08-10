<!DOCTYPE html>

<?php
	
	$host = 'localhost';
	$username= 'root';
	$pass = '';
	$db = 'university_addmission';
	
	$con2=new mysqli($host, $username, $pass, $db) or die("not connected");
	
	if(isset($_POST["Name"])){
		
		$Name = $_POST["Name"];
		$F_n = $_POST["Father_Name"];
		$M_n = $_POST["Mother_Name"];
		$D_o_B = $_POST["Date_of_Birth"];
		$G = $_POST["Gender"];
		$N_Id = $_POST["National_Id"];
		$N = $_POST["Nationality"];
		$Email = $_POST["Email"];
		$Pass1 = $_POST["Pass"];
		$Pass2 = $_POST["Pass1"];
		$Mobile = $_POST["Mobile"];
		
		if(!empty($Name) && !empty($F_n) && !empty($M_n) && !empty($D_o_B) && !empty($G) && !empty($N_Id) && !empty($N)
			&& !empty($Email) && !empty($Pass1) && !empty($Pass2) && !empty($Mobile)){
				
			$query2 = "INSERT INTO `university_administrator`(`Name`, `Father_Name`, `Mother_Name`, `Date_of_Birth`, `Gender`, `National_Id`, `Nationality`, `Email`,
			`Pass`, `Pass1`, `Mobile`)
			VALUES ('$Name','$F_n','$M_n','$D_o_B','$G','$N_Id','$N','$Email','$Pass1','$Pass2','$Mobile')";
			
			if($con2->query($query2) == TRUE){
				echo "<script>location.href='Login.php';</script>";
				echo "Welcome!";
			}
			else{
				echo "Die";
			}
		} else {
			echo "All fields must be filled up";
		}
		$con2->close();
	}
?>

<html>
	<head> 
	<a href="home.php" align="left"><h1>Home</h1></a>
		<link rel="stylesheet" type="text/css" href="style.php"/>
	</head>

<body background="g2.jpg">
</br><h3>University Addministrator Registraion</h3>
	<div class="main2">
		<a href="U_A_Registration_Form.php"></a>
		<form method="post" action="U_A_Registration_Form.php">
			<div class="name">																		<!-- its class for css -->
			<input type="text" placeholder="Enter name" name="Name"><br/>  							<!-- its name for database -->
			</div>
			<div class="F">
			<input type="text" placeholder="Enter Father's Name" name="Father_Name"><br/>
			</div>
			<div class="M">
			<input type="text" placeholder="Enter Mother's Name" name="Mother_Name"><br/>
			</div>
			<div class="DoB">
			<input type="text" placeholder="Year/Month/date" name="Date_of_Birth"><br/>
			</div>
			<div class="Gen">
				<label>Gender</label>
				<select name="Gender">
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
			</br>
			<div class="Na_id">
			<input type="text" placeholder="Enter National Id" name="National_Id"><br/>
			</div>
			<div class="Na">
			<input type="text" placeholder="Enter Nationality" name="Nationality"><br/>
			</div>
			<div class="email2">
			<input type="text" placeholder="Enter Email" name="Email"><br/>
			</div>
			<div class="pass">
			<input type="password" placeholder="Enter Password" name="Pass"><br/>
			</div>
			<div class="pass">
			<input type="password" placeholder="Enter Again Password" name="Pass1"><br/>
			</div>
			<div class="Mob">
			<input type="text" placeholder="Enter Mobile" name="Mobile"><br/>
			</div>
			
			<input type="submit" value="Submit" class="login" name="submit_btn">
			</br>
		</form>
	</div>
</body>

</html>
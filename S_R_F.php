<!DOCTYPE html>

<?php
	
	$host = 'localhost';
	$username= 'root';
	$pass = '';
	$db = 'university_addmission';
	
	$con3=new mysqli($host, $username, $pass, $db) or die("not connected");
	
	if(isset($_POST["Name"])){
		
		$Name = $_POST["Name"];
		$F_n = $_POST["Father_Name"];
		$M_n = $_POST["Mother_Name"];
		$D_o_B = $_POST["Date_of_Birth"];
		$G = $_POST["Gender"];
		$Add = $_POST["Address"];
		$R = $_POST["Religion"];
		$N = $_POST["Nationality"];
		$N_Id = $_POST["National_Id"];
		$Mobile = $_POST["Mobile_No"];
		$Email = $_POST["Email"];
		
		if(!empty($Name) && !empty($F_n) && !empty($M_n) && !empty($D_o_B) && !empty($G) && !empty(Add) && !empty($R) && !empty($N) 
			&& !empty($N_Id) && !empty($Mobile) && !empty($Email)){
			
			$query3 = "INSERT INTO `student`(`Name`, `Father_Name`, `Mother_Name`, `Date_of_Birth`, `Gender`, `Address`, `Religion`,
			`Nationality`, `National_Id`, `Mobile_No`, `Email`) VALUES ('$Name','$F_n','$M_n','$D_o_B','$G','$Add','$R', '$N', '$N_Id', '$Mobile', '$Email')";
			
			if($con3->query($query3) == TRUE){
				echo "<script>location.href='S_C_F.php';</script>";
				echo "Welcome!";
				echo " Wait! We are Checking your Information....";
			}
			else{
				echo "Die";
			}
		} else {
			echo "All field must be filled up";
		}
		$con3->close();
	}
?>

<html>
	<head> 
	<a href="home.php" align="left"><h1>Home</h1></a>
		<link rel="stylesheet" type="text/css" href="style.php"/>
	</head>

<body background="g2.jpg">
</br><h3>Student Registraion Form</h3>
	<div class="main3">
		<form method="post" action="S_R_F.php">
			<a href="S_R_F.php"></a>
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
			<div class="Add">
			<input type="text" placeholder="Enter Address" name="Address"><br/>
			</div>
			<div class="Rel">
			<input type="text" placeholder="Enter Religion" name="Religion"><br/>
			</div>
			<div class="Na">
			<input type="text" placeholder="Enter Nationality" name="Nationality"><br/>
			</div>
			<div class="Na_id">
			<input type="text" placeholder="Enter National Id" name="National_Id"><br/>
			</div>
			<div class="Mob">
			<input type="text" placeholder="Enter Mobile" name="Mobile_No"><br/>
			</div>
			<div class="email3">
			<input type="text" placeholder="Enter Email" name="Email"><br/>
			</div>
			
			<input type="Submit" value="Submit" class="login" name="submit_btn">
			</br>
		</form>
	</div>
</body>

</html>
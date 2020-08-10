<?php
	include("session.php");
?>

<!DOCTYPE html>

<?php
	
	$host = 'localhost';
	$username= 'root';
	$pass = '';
	$db = 'university_addmission';
	
	$con4=new mysqli($host, $username, $pass, $db) or die("not connected");
	
	if(isset($_POST["next_btn"])){
		
		/* university_details table */
		$u_n=$_POST["Name"];
		$u_c=$_POST["Code"];
		$u_a=$_POST["Address"];
		
		if(!empty($u_n) && !empty($u_c) && !empty($u_a) &&){
			
		$u_query1="INSERT INTO `university_details`(`Name`, `Code`, `Address`)
			VALUES ('$u_n','$u_c','$u_a')";
			
			if($con4->query($u_query1)){
				echo "ok_U_1";
			}
			else{
				echo "Die";
			}
		} else{
			echo "All fields must be filled up";
		}
		
		/* requirments table */
		$ssc_gpa=$_POST["S_S_C_gpa"];
		$hsc_gpa=$_POST["H_S_C_gpa"];
		
		if(!empty($ssc_gpa) && !empty($hsc_gpa)){
			$u_query2="INSERT INTO `requirment`(`S_S_C_gpa`, `H_S_C_gpa`)
				VALUES ('$hsc_gpa','$ssc_gpa')";
			
			if($con4->query($u_query2)){
				echo "ok_U_2";
			}
			else{
				echo "Die";
			}
		} else{
			echo "All fields must be filed up";
		}
		/* department table */
		$d_n = $_POST["Department_Name"];
		$credit = $_POST["Credit"];
		$c_fee = $_POST["Credit_Fee"];
		$t_fee = $_POST["Tuition_Fee"];
		
		if(!empty($d_n) && !empty($credit) && !empty($c_fee) && !empty($t_fee)){
			
			$u_query3= "INSERT INTO `department`(`Department_Name`, `Credit`, `Credit_Fee`, `Tuition_Fee`)
			VALUES ('$d_n', '$credit', '$c_fee', '$t_fee')";
			
			if($con4->query($u_query3)){
				echo "ok_U_3";
			}
			else{
				echo "Die";
			}
		} else{
			echo "All fields must be filled up";
		}
		/* course table */
		$c_id = $_POST["Course_Id"];
		$c_t = $_POST["Course_Title"];
		$c_c = $_POST["Credit"];
		
		if(!empty($c_id) && !empty($c_t) && !empty($c_c)){
			
			$u_query4 = "INSERT INTO `course`(`Course_Id`, `Course_Title`, `Credit`)
			VALUES ('$c_id','$c_t', '$c_c')";
			
			if($con4->query($u_query4)){
				echo "ok_U_4";
			}
			else{
				echo "Die";
			}
			
			echo "<script>location.href='U_P_D.php';</script>";
		}else {
			echo "All fields must be filled up";
		}
		$con4->close();
	}
?>

<html>
	<head> 
	<a href="home.php" align="left"><h1>Home</h1></a>
		<link rel="stylesheet" type="text/css" href="style.php"/>
	</head>

<body background="g2.jpg">
</br><h3>University Details Form</h3>
	<div class="main4">
		<a href="U_D_F.php"></a>
		<form method="post" action="U_D_F.php">
			<div class="U_name">																				<!-- its class for css -->
			<input type="text" placeholder="Enter University name" name="Name"><br/>  							<!-- its name for database -->
			</div>
			<div class="U_c">
			<input type="text" placeholder="Enter University Code" name="Code"><br/>
			</div>
			<div class="U_a">
			<input type="text" placeholder="Enter University Address" name="Address"><br/>
			</div>
			<div class="ssc_gpa">
			<input type="text" placeholder="Enter S.S.C Gpa" name="S_S_C_gpa"><br/>
			</div>
			<div class="hsc_gpa">
			<input type="text" placeholder="Enter H.S.C Gpa" name="H_S_C_gpa"><br/>
			</div>
			<div class="d_n">
			<input type="text" placeholder="Enter Department Name" name="Department_Name"><br/>
			</div>
			<div class="credit">
			<input type="text" placeholder="Enter Credit" name="Credit"><br/>
			</div>
			<div class="c_fee">
			<input type="text" placeholder="Enter Per Credit Fee" name="Credit_Fee"><br/>
			</div>
			<div class="t_fee">
			<input type="text" placeholder="Enter Tuition Fee" name="Tuition_Fee"><br/>
			</div>
			<div class="c_id">
			<input type="text" placeholder="Enter Course Id" name="Course_Id"><br/>
			</div>
			<div class="c_t">
			<input type="text" placeholder="Enter Course Title" name="Course_Title"><br/>
			</div>
			
			<button type="submit" value="Next" class="login" name="next_btn"></button>
			</br>
		</form>
	</div>
</body>

</html>
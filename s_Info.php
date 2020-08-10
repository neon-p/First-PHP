<?php
	include("session.php")
?>

<!DOCTYPE html>
<html>
<head>
	<a href="s_Info.php"></a>
	<h3 align="center">Student Information</h3>
	<style>
		table, th, td {
			border: 1px solid black;
		}
	</style>
</head>

<body>
<div align="center">
	<?php
	
		$host = 'localhost';
		$username= 'root';
		$pass = '';
		$db = 'university_addmission';
		
		$con4=new mysqli($host, $username, $pass, $db) or die("not connected");
		$sql= "SELECT * FROM `student`";
		$result= $con4->query($sql);
	
		if($result->num_rows >0){
		
			echo"<table><tr><th>Id</th><th>Name</th><th>Father Name</th>
				<th>Mother Name</th><th>Date of Birth</th><th>Gender</th>
				<th>Address</th><th>Religion</th><th>Nationality</th>
				<th>NAtional Id</th><th>Mobile No</th><th>Email</th></tr>";
			while($row= $result->fetch_assoc()){
				echo "<tr><td>".$row["Id"]."</td><th>".$row["Name"]."</td><td>".$row["Father_Name"]."</td>
					<td>".$row["Mother_Name"]."</td><td>".$row["Date_of_Birth"]."</td><td>".$row["Gender"]."</td>
					<td>".$row["Address"]."</td><td>".$row["Religion"]."</td><td>".$row["Nationality"]."</td>
					<td>".$row["National_Id"]."</td><td>".$row["Mobile_No"]."</td><td>".$row["Email"]."</td></tr>";
			}
				echo "</table>";
			
		}
		$con4->close();
	?>
</div>
	</body>

</html>
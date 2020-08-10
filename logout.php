
<?php
	session_start();
	if(session_destroy())
	{
		header("Location: Login.php");
	}
?>
<html>
	<head>
		<a href="logout.php"></a>
		<form method="POST" action="logout.php"></form>
	</head>
</html>
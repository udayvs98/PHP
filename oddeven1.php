<html>
<head>
<title> Pridicting whether a number is even or odd </title>
</head>


<body>
		<h1> Pridicting whether a number is even or odd </h1>
		<form action="" method="POST">
		Enter the number<br>
		<input type ="text" name="number" />
		<input type ="submit" />
</form>
</body>
</html>
		





<?php
			if($_POST){
						$number = $_POST['number'];
						if
						(($number % 2) == 0)
						{
							echo "The given number is even";
						}
						else
						{
							echo "The given number is odd";
						}
					}
			show_source("oddeven.php");
		?>

							
						
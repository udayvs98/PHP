<html>
<head>
<title> Sum of square </title>
<body>
		<h1> Sum of square </h1>
		<form action="" method="POST">
		Enter the number<br>
		<input type ="text" name="number" />
		<br>
		<input type ="text" name="number1" />
		<br>
		<input type ="submit" />
</form>
</body>
</html>
		<?php
			if($_POST){
						$number = $_POST['number'];
						$number1 = $_POST['number1'];
						{
							echo ($number*$number)+($number1*$number1);
						
						}
			}

show_source("table.php");

		?>

							
						
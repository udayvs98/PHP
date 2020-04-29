<html>
<head>
<body>
	<form action="" method="get" >
	Enetr the number:
	<input type="text" name='number'><br>
	Enter power of the number
	<input type="text" name='pow'>
	<input type="submit">
</form>
</body>
</head>
</html>

<?php
	// we are getting the input here
  $num=$_get['number'];   
  $pow=$_POST['pow'];   
  // this is the recursive part where the function is calling itself
  function power($number1,$pow1)
{
	$pow2 = $pow1-1;
	return($number1*(power($number1,$pow2)));

}

  $solution=power($number,$pow);

  echo "Value  of the Number is $solution";

?>
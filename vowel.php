<html>
<head><title>Vowel</title></head>
<body>
<form method="post">
Enter a string:-
<input type="text" name="text1">
<input type="submit" name="click">
</form>
<?php
$x=strtolower($_POST["text1"]);
$len=strlen($x);
$vow=0;
$space=0;
$vowel=array("a","e","i","o","u");
for($i=0;$i<$len;$i++)
{
	if($x[$i]=="a" or $x[$i]=="e" or $x[$i]=="i" or $x[$i]=="o" or $x[$i]=="u")
	{
		$vow++;
	}
	else if($x[$i]==" ")
	{
		$space++;
	}
}
echo "Number of vowels is:-".$vow;
echo "<br>";
echo "Number of white spaces is:-".$space;
?>
</body>
</html>
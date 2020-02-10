<!DOCTYPE html>
<html>
<head></head>
<body>
	<br><center>
<?php @$Number =$_GET['Number'];
	for($i=1;$i<=10;$i++)
{
	$z=$i*$Number;
	echo "$i*$Number= $z <br>";
}?>
</center>
</body>
</html>
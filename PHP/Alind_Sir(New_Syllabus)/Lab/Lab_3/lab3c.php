<!DOCTYPE html>
<html>
<head></head>
<body>
	<br><center>
<?php @$Number =$_GET['Number'];
$t=0;
$r;
$q=$Number;
do
{
	$r=$q%10;
	$t+=$r*$r;
	$q=$q/10;
}

while ($q!=0);
	echo "The squared sum = $t";?>
</center>
</body>
</html>
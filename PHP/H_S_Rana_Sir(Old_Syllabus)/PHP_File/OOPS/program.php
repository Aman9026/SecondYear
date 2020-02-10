<html>
<head>
<title>Application</title>
</head>
<body>
<center>
<h1><font color=lightblue>APPLICATION FOR FREE PRODUCT INFORMATION</font></h1>
<hr />
<form action="program2.php" method=post>
1.Title &nbsp <input type=radio name=titl value="Mr." />Mr.
 &nbsp <input type=radio name=titl value="Ms." />Ms.
&nbsp <input type=radio name=titl value="Dr." />Dr.
&nbsp <input type=radio name=titl value="Prof." />Prof.
&nbsp <input type=radio name=titl value="HH" />HH
<br>
<table>
<tr>
<td>2. Last Name:</td><td><input type=text name=lnam placeholder="Enter last name" /></td>
</tr>
<tr>
<td>3. First Name:</td><td><input type=text name=fnam placeholder="Enter first name" /></td>
</tr>
<tr>
<td>4.Position Held</td><td></td>
</tr>
<tr>
<td>&nbsp Designation:</td><td><input type=text name=desig placeholder="Enter Designation" /></td>
</tr>
<tr>
<td>&nbsp Department:</td><td><input type=text name=department placeholder="Enter Department" /></td>
</tr>
<tr>
<td>&nbsp Organization:</td><td></td>
</tr>
<tr>
<td>&nbsp Address:</td><td><input type=text name=add placeholder="Enter address" /></td>
</tr>
</table>
5.Please indicate the product(s) you would be interested. (Tick all the boxes that apply).
<br />
<table>
<tr>
<td><input type=checkbox value="Computer Systems" name="compsys">Computer Systems</td><td><input type=checkbox value="Operating Systems" name="opsys">Operating Systems</td>
</tr>
<tr>
<td><input type=checkbox value="Peripherals" name="peri">Peripherals</td><td><input type=checkbox value="Graphics Software" name="graphsys">Graphics Software</td>
</tr>
</table>
6.What is the likely period of your purchasing one or more of the above products?
<br />
&nbsp <input type=radio name=period value="Immediately" />Immediately
&nbsp <input type=radio name=period value="1 to 3 months" />1 to 3 months
&nbsp <input type=radio name=period value="Within 6 months" />Within 6 months
&nbsp <input type=radio name=period value="Within 1 year" />Within 1 year
<br />
<input type=submit name=sub > &nbsp <input type=reset value=Cancel>
</form>
</center>

<?php
$titl=$_POST['$titl'];
$lnam=$_POST['lnam'];
$fnam=$_POST['fnam'];
$desig=$_POST['desig'];
$department=$_POST['department'];
$add=$_POST['add'];
$period=$_POST['period'];
$List=null;
if(isset($_POST['compsys']))
{
	$List=$List.$_POST['compsys'].",";
}
if(isset($_POST['opsys']))
{
	$List=$List.$_POST['opsys'].",";
}
if(isset($_POST['peri']))
{
	$List=$List.$_POST['peri'].",";
}
if(isset($_POST['graphsys']))
{
	$List=$List.$_POST['graphsys'].",";
}
//mysql_connect("localhost", "root", "Prabhakar30") or die(mysql_error()); 
 //mysql_select_db("prem")  or die(mysql_error());
$con=mysqli_connect("localhost","root","","db2");
if (mysqli_connect_errno($con))
{
	die("Failed to connect to MySQL: " . mysqli_connect_error());
}
$sql="insert into exercise2 values('$titl','$fnam','$lnam','$desig','$department','$add','$period','$List')";
if(!mysqli_query($con,$sql))
{
	die('error: '.mysqli_error($con));
}
echo "<br><br><br><center><font color=blue><h2>Application submitted</h2></font></center>";
?>
</body>
</html>
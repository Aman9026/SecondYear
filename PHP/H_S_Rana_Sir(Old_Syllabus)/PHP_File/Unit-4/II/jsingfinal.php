<?php
final class person
{
var $name;
function set_name($data)
{
$this->name=$data;
}
function get_name()
{
return $this->name;
}
}
class friend extends person
{
var $name;
function speak()
{
echo $this->name,"is speaking<br>";
}
function set_name($data)
{
$this->name=strtoupper($data);
}
}
echo "creating your new friend.....<br>";
$friend=new friend;
$friend->set_name("sushan");
$friend->speak();
?>


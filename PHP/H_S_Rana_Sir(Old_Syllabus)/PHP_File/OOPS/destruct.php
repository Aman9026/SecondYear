<?php
class Person
{
var $name;
function __construct($data)
{
echo "constructing ",$data,"...<br>";
$this->name=$data;
}
function set_name($data)
{
$this->name=$data;
}
function get_name()
{
return $this->name;
}
function __destruct()
{
echo "destructing ",$this->name,"....<br>";
}
}
$ra=new Person("sri");

echo "<b>the name of your friend is:</b>",$ra->get_name(),"<br>";

?>

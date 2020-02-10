<?php
class Person
{
var $name;
function set_name($data)
{
$this->name=$data;
$this->name=$this->sri();
}
private function sri()
{
return $this->name;
}
}
$ralph=new Person;
$ralph->set_name("srikanth");
echo "<b>the name of your friend is:</b>",$ralph->set_name,"<br>";
echo "<b>the name of your friend is:</b>",$ralph->name,"<br>";
?>
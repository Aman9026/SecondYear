<?php
class Person
{
var $name;
function __construct($data)
{
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
}
$ra=new Person;
echo "<b>the name of your friend is:</b>",$ra->get_name(),"<br>";

?>

<?php
class Person
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
class Friend extends Person
{
function set_message($msg)
{
$this->message=$msg;
}
function speak()
{
echo $this->message;
}
}
$tony=new Friend;
$tony->set_name("tony");
$tony->set_message("hiye from tony");
echo $tony->get_name(), "<br>";
echo $tony->speak();
?>
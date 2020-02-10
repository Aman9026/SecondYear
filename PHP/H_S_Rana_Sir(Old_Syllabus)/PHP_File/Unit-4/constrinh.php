<?php
class person
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
class friend extends person
{
var $message;
function __construct($data,$msg)
{
parent :: __construct($data);
$this->message=$msg;
}
function speak()
{
echo $this->message;
}
}
$nancy=new friend("nancy","hi , nancy here.");
echo "the name of your friend is ",$nancy->get_name(),".<br>";
echo $nancy->get_name(),"says",$nancy->speak();
"<br>";
?>
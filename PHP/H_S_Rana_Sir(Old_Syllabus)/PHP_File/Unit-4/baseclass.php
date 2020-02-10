<?php
class person
{
var $name;

protected function set_name($data)
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
function set_message($msg)
{
$this->message=$msg;
}
function speak()
{
echo $this->message;
}
function set_name_public($data)
{
parent :: set_name($data);
}
function get_name_public()
{
return parent::get_name();
}
}
$nancy=new friend;
$nancy->set_name_public("srikanth");
$nancy->set_message("hello from srikanth");
echo "name of your friend is ",$nancy->get_name_public(),"<br>";
echo $nancy->get_name_public(),"says",$nancy->speak(),"<br>";
?>

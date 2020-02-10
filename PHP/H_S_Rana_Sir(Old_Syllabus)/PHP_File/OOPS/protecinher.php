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
function set_name_public($name)
{
$this->set_name($name);
}
}
$tony=new friend;
$tony->set_name_public("tony");
$tony->set_message("hiya from tony");
echo "the name of your friend is ",$tony->get_name(),"<br>";
echo $tony->get_name(),"says",$tony->speak(),"<br>";
?>
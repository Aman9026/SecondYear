<?php
class friend
{
var $name;
var $message;
function speak()
{
echo $this->name,"says","",$this->message,"<br>";
}
function set_message($msg)
{
$this->message=$msg;
}
function __call($method,$arguments)
{
if ($method=="set_name")
{
if(count($arguments)==1)
{
$this->name=$arguments[0];
}
if(count($arguments)==2)
{
$this->name=$arguments[0];
$this->message=$arguments[1];
}
}
}
}
echo "creating your new friend...<br>";
$friend=new friend;
$friend->set_name("srikanth");
$friend->set_message("hello from susan");
$friend->speak();
$friend->set_name("ted","ted here");
$friend->speak();
?>

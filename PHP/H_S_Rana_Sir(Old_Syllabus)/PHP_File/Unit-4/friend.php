<?php
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
}
?>
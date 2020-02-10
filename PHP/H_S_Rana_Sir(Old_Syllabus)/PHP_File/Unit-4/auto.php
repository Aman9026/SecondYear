<?php
function __autoload($class_name)
{
require $class_name.'.php';
}
$tony=new friend;
$tony->set_name("tony");
$tony->set_message("hiya from tony");
echo "the name of your friend is ",$tony->get_name(),"<br>";
echo $tony->get_name(),"says ",$tony->speak(),"<br>";
?>
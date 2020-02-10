<?php
class math
{
static $data;

public static function say_hi($op)
{
var $item;
math::$data=$op;
echo "self::\$data=",math::$data,"<br>";
echo "adding one to self ::\$data<br>";
self::$data++;
echo "now self::\$data=",self::$data,"<br>";
$item=self::$data;
echo $item;
}

}
echo "using the math class.....<br>";

math:: say_hi(5);
math:: say_hi(3);
//math::squarer(2);
?>

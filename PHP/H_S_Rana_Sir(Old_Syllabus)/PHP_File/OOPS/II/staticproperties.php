<?php
class math
{
static $data;
public static function say_hi($op)
{
self::$data=$op;
echo "self::$data=",self::$data,"<br>";
echo "adding one to self ::\$data<br>";
self::$data++;
echo "now self::\$data=",self::$data,"<br>";
}

}
echo "using the math class.....<br>";
echo math::$data;
math:: say_hi(5);
//math::squarer(2);
?>

<?php
class math
{
static $message="no worries";
public static function say_hi()
{
echo " the math class says 'hello there'.<br>";
}
function squarer($op)
{
echo $op,"<sup>2</sup>=",$op*$op,"<br>";
}
}
class new_math extends math
{
public static function show_message()
{
echo "in new math ",math::$message,"<br>";
}
}

echo "using the math class.....<br>";
new_math::show_message();
//math::squarer(2);
?>

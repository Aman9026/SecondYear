<?php
class math
{
public static function say_hi()
{
echo " the math class says 'hello there'.<br>";
}
function squarer($op)
{
echo $op,"<sup>2</sup>=",$op*$op,"<br>";
}

}
echo "using the math class.....<br>";
math:: say_hi();
math::squarer(2);
?>

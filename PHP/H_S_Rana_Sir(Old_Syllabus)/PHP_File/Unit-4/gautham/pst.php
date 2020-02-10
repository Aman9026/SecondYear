<?php
class Math
{
//Static $data;
public static function say_hi()
{
echo "the math class says 'Hello there'. <br>";
}
function square($op)
{
echo $op, "<sup>2</sup> = ", $op * $op, "<br>";
}
}
echo "using the math class...<br>";
Math::say_hi();
Math::square(2);
?>
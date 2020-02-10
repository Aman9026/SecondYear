<?php
class Math
{
	static $data;

public static function set_data($op)
{
	self::$data = $op;
	echo "self::\$data = ", self::$data, "<br>";
	echo "Adding one to self::\$data <br>";
	self::$data++;
	echo "Now self::\$data = ",self::$data, "<br>";
	echo "Assigning self::\$data to \$item.<br>";
	$item = self::$data;
	echo "adding one more to \$item. <br>";
	$item++;
	echo "Now \$item = ", $item, "<br>";
	}
}

echo "using the math class <br>";
Math::set_data(5);
?>
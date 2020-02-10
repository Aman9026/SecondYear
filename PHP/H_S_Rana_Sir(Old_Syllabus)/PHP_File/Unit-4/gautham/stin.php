<?php
class Math
{
	static $message = "problem is solved";
}

class New_Math extends Math
{
	public static function show_message()
	{
		echo "In New_Math, the meaage from the Math class is: '",
		Math::$message,"'<br>";
	}
}

echo "using the New_Math class <br>";
New_Math::show_message();

?>


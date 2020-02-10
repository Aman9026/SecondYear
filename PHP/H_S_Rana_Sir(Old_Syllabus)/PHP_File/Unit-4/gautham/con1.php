<?php
class Math
{
	 const pi = 3.14;
	function display_pi()
	{
		echo 'pi from inside the class:', self::pi, "<br>";
	}
}
	echo 'pi from ouside the class:', Math::pi , "<br>";
$object = new Math();
$object->display_pi();
?>
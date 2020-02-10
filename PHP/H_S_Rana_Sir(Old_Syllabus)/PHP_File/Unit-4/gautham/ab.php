<?php
abstract class Novel
{
	function get_publisher_info()
	{
	return "Steveco publishing<br>";
	}
abstract function get_text();
}
class My_Novel extends Novel
{
	public function get_text()
	{
	return "it was a dark and stromy night";
}
}
$mynovel = new My_Novel();
echo "this novel comes from ", $mynovel->get_publisher_info();
echo "the novel says '",$mynovel->get_text(), "'<br>";
?>
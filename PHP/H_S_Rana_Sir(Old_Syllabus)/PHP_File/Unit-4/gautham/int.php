<?php
interface iNovel
{
	function get_dedication();
	function get_text();
}
class My_Novel implements iNovel
{
	public function get_dedication()
	{ 
		return "to my parents.";
	}

public function get_text()
	{
		return "it is exam time";
	}
}
$con = new My_novel();
echo "the novel is dedicated '", $con->get_dedication(), "'<br>";
echo "the novel says '", $con->get_text(), "'<br>";
?>
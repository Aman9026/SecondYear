<?php
abstract class novel
{
function get_publisher_info()
{
return "steveCo publishing<br>";
}
abstract function get_text();
}
class my_novel extends novel
{
public function get_text()
{
return "it was a dark and stormy night....";
}
}
//$novel1=new novel();
$my_novel=new my_novel;
echo "this novel comes from",$my_novel->get_publisher_info();
echo "the novel says'",$my_novel->get_text(),"<br>";
?>
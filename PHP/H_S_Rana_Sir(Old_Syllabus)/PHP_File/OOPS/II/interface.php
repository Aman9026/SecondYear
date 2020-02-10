<?php
interface inovel
{
function get_dedication();
function get_text();
}
class my_novel implements inovel
{
public function get_dedication()
{
return "to my sweetie";
}
public function get_text()
{
return "it was a dark and stormy night...";
}
}
class novel implements inovel
{
public function get_dedication()
{
return "to my sweetie";
}
public function get_text()
{
return "it was a dark and stormy night...";
}
}
class novel2 extends novel 
{
/*public function get_dedication()
{
return "to my ";
}
public function get_text()
{
return "it was a dark and stormy ";
}*/
}
$novel=new my_novel;
echo "the novel is dedicated'",$novel->get_dedication(),"'<br>";
echo "the novel says'",$novel->get_text(),"<br>";
$novel1=new novel;
echo "the novel is dedicated'",$novel1->get_dedication(),"'<br>";
echo "the novel says'",$novel1->get_text(),"<br>";
$novel2=new novel2;
echo "the novel is dedicated'",$novel2->get_dedication(),"'<br>";
echo "the novel says'",$novel2->get_text(),"<br>";


?>











<?php
class class_1
{
public $data;
function __construct($item)
{
$this->data=$item;
}
}
class class_2
{
public $data;
function __construct($item)
{
$this->data=$item;
}
}
$object_1=new class_1("a");
$object_1copy=$object_1;
$object_1a=new class_1("a");
$object_2=new class_2("a");
if($object_1==$object_1a)
{
echo '$object_1==$object_1a is true<br>';
}
else
{
echo '$object_1==$object_1a is false<br>';
}
if($object_1==$object_2)
{
echo '$object_1==$object_2 is true<br>';
}
else
{
echo '$object_1==$object_2 is false<br>';
}if($object_1===$object_1a)
{
echo '$object_1==$object_1a is true<br>';
}
else
{
echo '$object_1==$object_1a is false<br>';
}if($object_1===$object_1copy)
{
echo '$object_1==$object_1copy is true<br>';
}
else
{
echo '$object_1==$object_1copy is false<br>';
}
?>


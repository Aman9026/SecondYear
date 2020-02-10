<?php
class test
{
public $a;
private $b;
function __construct($a, $b)
{
$this->a = $a;
$this->b = $b;
}
function __clone()
{
$this->a = "c";
}
}
$a = new test("gautam" , "Assistant professor");
$b = $a; //Copy of the object
$c = clone $a; //clone of the object
$a->a = "gautam is";
print_r($a);
print_r($b);
print_r($c);
print_r($a);
?>
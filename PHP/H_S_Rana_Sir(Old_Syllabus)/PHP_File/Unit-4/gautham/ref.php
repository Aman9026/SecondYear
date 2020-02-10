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
}
$a = new test("Gautam" , "Assistant professor");
$b = $a; //Copy of the object
print_r($a);
print_r($b);
$a->a = "Gautam is";
print_r($a);
print_r($b);
?>

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
$a = new test("gautam" , "Assistant professor");
$b = $a; //Copy of the object
$c = clone $a; //clone of the object
print_r($a);echo "<br>";
print_r($b);echo "<br>";
print_r($c);echo "<br>";
$a->a = "gautam is";

print_r($a);echo "<br>";
print_r($b);echo "<br>";
print_r($c);echo "<br>";
?>
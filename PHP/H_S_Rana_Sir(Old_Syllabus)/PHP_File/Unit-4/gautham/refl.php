<?php
function tracker()
{
	static $counter = 10;
static $counter1 = 10;
	$counter++;
	return $counter;

}

$method = new ReflectionFunction ('tracker');

echo "The method named ", $method->getName(),"<br>";
echo " is ", $method->isInternal() ? "PHP - defined <br>.": "user _ defined. <br>";
echo "It's in ", $method->getFileName(), "<br>";
echo "It starts at line ", $method->getStartLine(),"<br>";
echo "and ends at line ", $method->getEndline(), "<br>";

if ($method->getStaticVariables())
{
$statics = $method->getStaticVariables();
echo "It has static variables: ", var_export($statics, 1), "<br>";
}
echo " Invoking the method results in ", var_dump($method->invoke()), "<br>";
?> 
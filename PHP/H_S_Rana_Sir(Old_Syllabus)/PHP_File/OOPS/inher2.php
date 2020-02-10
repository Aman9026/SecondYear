
<?php

class foo
{
    public function printItem($string)
    {
        echo 'Foo: ' . $string . PHP_EOL;
    }
    
    public function printPHP()
    {
        echo 'PHP is great.' . PHP_EOL;
    }
}

class bar extends foo
{
    public function printItem($string)
    {
        echo 'Bar: ' . $string . PHP_EOL;
    }
}

$foo = new foo();
$bar = new bar();
$foo->printItem('baz');echo "<br>"; // Output: 'Foo: baz'
$foo->printPHP();echo "<br>";       // Output: 'PHP is great' 
$bar->printItem('baz');echo "<br>"; // Output: 'Bar: baz'
$bar->printPHP();echo "<br>";       // Output: 'PHP is great'
?>

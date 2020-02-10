<?php
class DataHandler implements Iterator
{
private $array=array();
public function __construct($arr)
{
if(is_array($arr))
{
$this->array=$arr;
}
}
public function current()
{
return current($this->array);
}
public function key()
{
return key($this->array);
}
public function next()
{
return next($this->array);
}
public function valid()
{
return $this->current()!==false;
}
public function rewind()
{
reset($this->array);
}
}
$new_array=array("a","b","c","d","e");
$object=new DataHandler($new_array);
echo "iterating over the object:<br>";
foreach($object as $key=>$value){
echo $key,"=>",$value,"<br>";
}
?>





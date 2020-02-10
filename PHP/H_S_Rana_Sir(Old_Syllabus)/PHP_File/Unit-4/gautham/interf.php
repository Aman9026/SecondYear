<?php
class vehicle implements testdrive{
public $color;
public $num_doors;
public $price;
public $shape;
public $brand;
public function __construct(){
  echo 'About this Vehicle.<br />';
}
public function showPrice(){
  echo 'This vehicle costs '.$this->price.'.<br />';
}
public function numDoors(){
  echo 'This vehicle has '.$this->num_doors.' doors.<br />';
}
public function drive(){
  echo 'VRRROOOOOOM!!!';
}
public function stop(){
  echo 'SSSCCRRREEEEEECCHH!!!<br />';
}
} 
interface testdrive{
function drive();
function stop();
}
$object = new vehicle;
$object->drive();
$object->stop();
?>
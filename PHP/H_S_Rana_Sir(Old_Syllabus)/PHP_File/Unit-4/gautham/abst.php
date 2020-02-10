<?php

abstract class mathematics{
abstract protected function getMessage();
abstract protected function addTwo($num1);
public function showMessage() {
  echo $this->getMessage();
}
}

class myMath extends mathematics{

protected function getMessage(){
  return "The anwser is: ";
}
public function addTwo($num1) {
  return $num1+2;
}
}
$myMath = new myMath;
$myMath->showMessage();
echo $myMath->addTwo(4);
?>
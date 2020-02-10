
<?php
class math
{
const pi=3.14159;
function display_pi()
{
echo 'pi from inside the class (self::pi):',self::pi,"<br>";
}
}
$mat=new math();
echo $mat->display_pi();
echo math::pi;
//echo self::pi;
//echo $this->pi;
?>
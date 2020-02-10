<?php
// we connect to example.com and port 3307
$link = mysql_connect('example.com:3307', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);


?>
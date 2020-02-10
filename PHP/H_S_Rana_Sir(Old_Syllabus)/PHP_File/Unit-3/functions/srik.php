<?php
error_reporting(E_ALL);

$link = mysql_connect('localhost', 'root', '');
$db_list = mysql_query(showdatabases($link));

$i = 0;
$cnt = mysql_num_rows($db_list);
while ($i < $cnt) {
    echo mysql_db_name($db_list, $i) . "<br>";
    $i++;
}
?>

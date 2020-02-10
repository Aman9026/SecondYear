
<?php
$link    = mysql_connect('localhost', 'root', '');
$charset = mysql_client_encoding($link);

echo "The current character set is: $charset\n";
?>

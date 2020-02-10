
<?php
$item = "Zak's Laptop";
$escaped_item = mysql_real_escape_string($item);
printf("Escaped string: %s". "<br>", $escaped_item);
?>

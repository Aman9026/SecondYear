<?php
    require("myConnenctionFile.php");
   
    $sql="SELECT  * from testing";
    $result=mysql_query($sql);

    $row = mysql_fetch_object($result);
    echo $row->id . ' ' . $row->name; // Output is (1      Hassan)
    mysql_data_seek($result,2);
    $row = mysql_fetch_object($result);
    echo $row->id . ' ' . $row->name; // Output is (3      Rose)
    echo "<BR><BR>";
?>
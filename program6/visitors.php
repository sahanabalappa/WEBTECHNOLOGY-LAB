<?php
    echo "<h3> REFRESH PAGE</h3>";
    $name="count.txt";
    $file=fopen($name,"r");
    $hits=fscanf($file,"%d");
    fclose($file);
    $hits[0]++;
    $file=fopen($name,"w");
    fprintf($file,"%d",$hits[0]);
    fclose($file);
    echo "Total number of views:".$hits[0];
?>
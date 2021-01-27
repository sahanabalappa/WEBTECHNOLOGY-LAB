<?php
    $states="Mississippi Alabama Texas Massachusetts Kansas";
    $statesList=[];
    $states1=explode(' ',$states);
    echo "Original Array is :<br>";
    foreach($states1 as $i=>$value)
    print("STATES[$i]=$value<br>");
    foreach($states1 as $state)
    {
        if(preg_match('/xas$/',($state)))
            $statesList[0]=($state);
    }
    foreach($states1 as $state)
    {
        if(preg_match('/^k.*s$/i',($state)))
            $statesList[1]=($state);
    }
    foreach($states1 as $state)
    {
        if(preg_match('/a$/',($state)))
            $statesList[3]=($state);
    }
    foreach($states1 as $state)
    {
        if(preg_match('/^M.*s$/',($state)))
            $statesList[2]=($state);
    }
    echo "<br><br>Resultant Array is:<br>";
    foreach($statesList as $array=>$value)
    print("STATES[$array]=$value<br>");
?>
<?php
    // associative array key => val
    $scores = array("homework" => 34,
    "test" => 42, "project" => 28);

    //echo $scores['homework']

    $scores ['attendance']=10;

    krsort($scores);
    ksort($scores);
    foreach($scores as $key => $val){
        echo "$key : $val <br>";
    }

    echo"<pre>";
    print_r($key);
    echo"</pre>";
?>
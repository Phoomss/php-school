<?php 
    $name = array("de","da","do","der","dow");
    $c = count($name);
    echo "$c<br>";

    for ($i=0;$i<$c;$i++){
        echo "$name[$i] <br>";
    }

    $name [] = "re";
    $name [] = "ra";

    foreach($name as $m){
        echo "$m<br>";
    }

    sort($name);
    rsort($name);
    echo"After-------------<br>";
    foreach($name as $m){
        echo "$m<br>";
    }

    $m = rand(1,100);
    echo$m;
    echo"<br>********************************<br>";
    $scores = array();

    for ($i=0;$i<50;$i++){
        $scores [$i] = rand(1,100);
    }
    rsort($scores);

    foreach($scores as $i => $s){
        echo "$i : $s<br>";
    }
?>
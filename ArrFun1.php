<?php

    echo "<br>Unique";
    $a=array("a"=>"red","b"=>"green","c"=>"red");
    print_r(array_unique($a));

    echo "<br>sort === index";
    $cars=array("Volvo","BMW","Toyota");
    sort($cars);
    print_r($cars);

    echo "<br>rsort === index";
    $cars=array("Volvo","BMW","Toyota");
    rsort($cars);
    print_r($cars);

//-----------------------------------------------------------

    echo "<br> asort";
    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    asort($age);
    print_r($age);

    echo "<br> arsort";
    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    arsort($age);
    print_r($age);

    echo "<br> ksort";
    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    ksort($age);
    print_r($age);

    echo "<br> krsort";
    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    krsort($age);
    print_r($age);

?>
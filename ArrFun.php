<?php

    echo "<br><br> array_change_key_case";
    $age = array("Peter" => "35","Ben" => "37","Joe" => "43"); print_r(array_change_key_case($age,CASE_UPPER));

    echo "<br><br> array_merge";
    $a1=array("red","green");
    $a2=array("blue","yellow");
    $a3=array_merge($a1,$a2);
    print_r($a3);

    echo "<br><br> array_pop";
    $a=array("red","green");
    array_pop($a);
    print_r($a);
    echo "<br><br> array_push";
    array_push($a,"orange","yellow");
    print_r($a);

    echo "<br><br> array_replace";
    $a1=array("red","green","orange","black","white");
    $a2=array("blue","yellow");
    $a1=array_replace($a1,$a2);
    print_r($a1);

    echo "<br><br> array_search ===>"; $a=array("a"=>"red","b"=>"green","c"=>"blue");
    echo array_search("red",$a);

    echo "<br><br> array_unique";
    $a=array("a"=>"red","b"=>"","c"=>"red");;
    print_r($a);

?>
<?php

    $stud = array("stud1" => array(
                 "name" => "Ravi",
                 "eno" => 2021,
                 "class" => "BCA2"),
                 "stud2"=> array(
                 "name" => "Vivek",
                 "eno"=> 2030,
                 "class" => "BCA1"),
                 );

    foreach ($stud as $studarr => $arr)
    {
        echo "$studarr =====";
        foreach ($arr as $fkey => $fvalue)
        {
            echo "$fkey ==== $fvalue <br>";
        }
    }

?>
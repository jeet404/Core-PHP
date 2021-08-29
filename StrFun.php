<?php

    echo ("chr()"."<br>");
    echo chr(65)."<br><br>";//Decimal Value of A

    echo "strchr()"."<br>";//Returns String from matching character
    echo strchr("Hello World!","W")."<br><br>";

    echo "strcmp()"."<br>";//0=>equal, <0==>s1<s2>0 =>s1>s1
    echo strcmp("Hello World!","Hello World!")."<br><br>";

    echo "strlen()"."<br>";
    echo strlen("Hello")."<br><br>";//Length of given string

    echo "strrev()"."<br>";
    echo strrev("Hello World!")."<br><br>";//Reverse String

    echo "strtolower()"."<br>";
    echo strtolower("HELLO WORLD!")."<br><br>";//LowerCase

    echo "strtoupper()"."<br>";
    echo strtoupper("hello world!")."<br><br>";//UpperCase

    echo "strpos()"."<br>";//Position of the first occurrence
    echo strpos("I Love PHP , i Love PHP Too",",")."<br><br>";

    echo "strstr()"."<br>";//Returns string from matching
    echo strstr("Hello World!","World")."<br><br>";

    echo "trim()"."<br>";
    $str = "Hello World!";
    echo $str."<br>";
    echo trim($str,"Hell")."<br><br>";

    echo "substr()"."<br>";
    echo substr("Hello World!",6)."<br><br>";

?>
<?php

    $cookie_name = "user_name";
    $cookie_value = "KSC";
    setcookie($cookie_name, $cookie_value, time()+60*2);
    if(!isset($_COOKIE[$cookie_name]))
    {
        echo "Cookie Named '" . $cookie_name . "' is not set";
    }
    else
    {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is : " . $_COOKIE[$cookie_name];
    }

?>
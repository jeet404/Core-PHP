<?php

    $age = 20;

    switch($age)
    {
        case $age >= 18 && $age <= 80:
            echo "Allowed";
            break;
        case 16:
            echo "On Trial";
            break;
        default:
            echo "Try Again after 16/18 Years";
    }
?>
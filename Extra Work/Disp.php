<?php

    session_start();

    $hour = date('H', time());
    if(isset($_SESSION["usrnm"]))
    {
        if( $hour > 6 && $hour <= 11) 
        {
            echo "Good Morning ," . $_SESSION["usrnm"] . "<br>";
        }
        else if($hour > 11 && $hour <= 16)
        {
            echo "Good Afternoon ," . $_SESSION["usrnm"] . "<br>";
        }
        else if($hour > 16 && $hour <= 23)
        {
            echo "Good Evening ," . $_SESSION["usrnm"] . "<br>";
        }
        else if($hour > 23)
        {
            echo "Good Night ," . $_SESSION["usrnm"] . "<br>";
        }
    }

    echo "<h3><a href='MainForm.html'>Logout</a></h3>";
    
    #echo ("<h3><a href='. session_destroy();header('Location: MainForm.html' );'>Logout</a><h3>");

?>
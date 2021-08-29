<?php

//Start the Session
    session_start();
    if(isset($_SESSION["favcolor"]) && isset($_SESSION["favanimal"]))
    {
        echo "Favorite Colour is " . $_SESSION["favcolor"] . "<br>";
        echo "Favorite Animal is " . $_SESSION["favanimal"] . "<br>";
    }

    print_r($_SESSION);

?>
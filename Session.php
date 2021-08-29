<?php

//Start the Session
    session_start();
//Set Session Variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";

    echo "Session Variable are Set.";

    #session_unset();
    #session_destroy();

?>
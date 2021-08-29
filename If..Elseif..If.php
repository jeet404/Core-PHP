<?php

#00-12 Morning,12-18 Afternoon,18-22 Evening,22-24 Night

    $t = "22";
    echo "Time is " . $t;
    echo ", and will give the following massage:</p>";

    if($t < "12")
    {
        echo "Good Morning";
    }
    elseif($t < "18")
    {
        echo "Good Afternoon";
    }
    elseif($t < "22")
    {
        echo "Good Evening";
    }
    else
    {
        echo "Good Night";
    }

?>
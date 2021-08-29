<?php

    echo("Checkdate"."<br>");
    var_dump(checkdate(12,31,-400));
    echo "<br>";
    var_dump(checkdate(2,29,2003));
    echo "<br>";
    var_dump(checkdate(2,29,2004)."<br><br>");

    echo("Date"."<br>");
    echo date("d M Y"."<br><br>");//15-4-21

    echo("Date"."<br>");
    print_r(getdate())."<br><br>";

    echo("Time"."<br>");
    $t=time();
    echo($t."<br>");
    echo(date("Y-m-d",$t));

?>
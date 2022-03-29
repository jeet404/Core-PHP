<?php

$n = 5;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        if ($j % 2 == 0) {
            echo "# ";
        } else {
            echo "* ";
        }
    }
    echo "<br>";
}
/*

*
* #
* # *
* # * #
* # * # *

*/
?>
<hr>
<?php
$n = 5;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        if ($j % 2 == 0) {
            echo "0 ";
        } else {
            echo "1 ";
        }
    }
    echo "<br>";
}
/*

1
1 0
1 0 1
1 0 1 0
1 0 1 0 1

*/
?>
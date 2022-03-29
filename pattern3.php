<?php

$n = 5;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}

/*

1
12
123
1234
12345

*/
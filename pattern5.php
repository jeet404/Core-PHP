<?php
$num = 5;
for ($i = 0; $i < $num; $i++) {
    for ($k = $num; $k > $i + 1; $k--) {
        echo " ";
    }
    for ($j = 0; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}
for ($i = $num - 1; $i > 0; $i--) {
    for ($k = $num - 1; $k >= $i; $k--) {
        echo " ";
    }
    for ($j = 0; $j < $i; $j++) {
        echo "* ";
    }
    echo "\n";
}

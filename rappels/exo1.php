<?php

function compareNumbers($nb1, $nb2) {
    if ($nb1 > $nb2) {
        echo "$nb1 est supérieur à $nb2\n";
    } else if ($nb1 < $nb2) {
        echo "$nb1 est inférieur à $nb2\n";
    } else {
        echo "$nb1 est égal à $nb2\n";
    }
}

$i = 1;

while ($i <= 10) {
    echo "essai $i \n";
    compareNumbers(random_int(0, 10), random_int(0, 10));
    $i++;
}
<?php

$tableau = [11, 125, 82];

function reverseInt($tableau) {
    $reverse = array_reverse($tableau);
    return $reverse;
}


$var = reverseInt($tableau);

foreach ($var as $inverted) {
    echo "$inverted\n";
}


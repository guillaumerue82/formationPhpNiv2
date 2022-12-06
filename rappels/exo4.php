<?php

$tableau = array('Rue', 'Guillaume', 'formation PHP', 'niveau 2');

function flipArray($input) {
    $flipped = array_flip($input);
    return $flipped;
}

$var = flipArray($tableau);

foreach ($var as $line) {
    echo "$line\n";
};




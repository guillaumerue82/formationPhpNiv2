<?php
$tableau = [random_int(1,200), random_int(1,200), random_int(1,200), random_int(1,200)];

function arrayHighest($tableau) {
    $i = 1;
    $highest = max($tableau);
    foreach ($tableau as $number) {
        echo "Valeur $i = $number\n";
        $i++;
    }
    echo "Valeur maximale : $highest\n";
}
    
arrayHighest($tableau);

 


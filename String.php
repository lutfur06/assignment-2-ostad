<?php

$strings = ["Hello", "World", "PHP", "Programming"];
$stringsSplit = str_split($strings[0]);

$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E','I','O','U'];

$totalArray = [];
for ($i = 0; $i < count($strings); $i++) {
    $s = $strings[$i];
    $sReverse = strrev($s);
    $sSplit = str_split($strings[$i]);
    $p = 0;
    for ($j = 0; $j < count($vowels); $j++) {

        if (array_search($vowels[$j], $sSplit)) {
            $p++;
        };

    };
    $totalArray[$i]['mainString'] = $s;
    $totalArray[$i]['count'] = $p;
    $totalArray[$i]['reverse'] = $sReverse;

};

foreach ($totalArray as $element) {
    printf("Original String: %s, Vowel Count: %d, Reversed String: %s <br>", $element['mainString'], $element['count'], $element['reverse']);
}

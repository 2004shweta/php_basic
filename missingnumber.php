<?php

function findMissingNumbers($arr, $n) {
    $missing = array();
    for ($i = 1; $i <= $n; $i++) {
        if (!in_array($i, $arr)) {
            $missing[] = $i;
        }
    }
    return $missing;
}


$arr = array(1, 2, 4, 6);
$n = 6;
$missingNumbers = findMissingNumbers($arr, $n);
echo "Missing numbers: " . implode(", ", $missingNumbers);
?>

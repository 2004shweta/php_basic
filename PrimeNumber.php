<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$limit = 100; // Change this value to check up to a different number

echo "Prime numbers up to $limit are:\n";
for ($i = 2; $i <= $limit; $i++) {
    if (isPrime($i)) {
        echo "$i\n";
    }
}
?>
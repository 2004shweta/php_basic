<?php
// Function to display a half pyramid of alphabets
function halfPyramidAlphabets($rows) {
    $alphabet = 'A';
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $alphabet . " ";
        }
        $alphabet++;
        echo "<br>";
    }
}

// Example usage
$rows = 5;
halfPyramidAlphabets($rows);
?>

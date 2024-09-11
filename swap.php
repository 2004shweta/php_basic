<?php
function swap(&$a, &$b, &$c) {
    $temp = $a;
    $a = $c;
    $c = $b;
    $b = $temp;
}

echo "Enter a, b, c respectively:";
echo "<br>";
$a = 1;
$b = 2;
$c = 3;
echo "a = $a";
echo "<br>";
echo "b = $b";
echo "<br>";
echo "c = $c";
echo "<br>";

echo "Value before swapping";
echo "<br>";
echo "Before swapping a=" . $a;
echo "<br>";
echo "Before swapping b=" . $b;
echo "<br>";
echo "Before swapping c=" . $c;
echo "<br>";

swap($a, $b, $c);


echo "Value After swapping";
echo "<br>";
echo "After swapping a=" . $a;
echo "<br>";
echo "After swapping b=" . $b;
echo "<br>";
echo "After swapping c=" . $c;
?>
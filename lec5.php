<!-- <?php
$count = 1;
$limit = 10;

while ($count <= $limit) {
    if ($count % 2 == 0) {
        echo "$count is even.\n";
    } else {
        echo "$count is odd.\n";
    }
    $count++;
}
?> -->
<!-- 
<?php
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $numDigits = strlen((string)$number);

    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }

    return $sum == $number;
}

$limit = 407; // Change this value to check up to a different number

echo "Armstrong numbers up to $limit are:\n";
for ($i = 1; $i <= $limit; $i++) {
    if (isArmstrong($i)) {
        echo "$i\n";
    }
}
?> -->




<?php
$associativeArray = [
    "first" => "A",
    "second" => "B",
    "third" => "C",
    "fourth" => "D",
    "fifth" => "E",
    "sixth" => "F",
    "seventh" => "G",
    "eighth" => "H",
    "ninth" => "I",
    "tenth" => "J"
];

foreach ($associativeArray as $key => $value) {
    echo "Key: $key, Value: $value\n";
    echo "<br>";
}
?>
<!-- <?php
$condition1 = true;
$condition2 = false;
$condition3 = true;
$condition4 = false;
$condition5 = true;

if ($condition1) {
    echo "Condition 1 is true.";
} elseif ($condition2) {
    echo "Condition 2 is true.";
} elseif ($condition3) {
    echo "Condition 3 is true.";
} elseif ($condition4) {
    echo "Condition 4 is true.";
} elseif ($condition5) {
    echo "Condition 5 is true.";
} else {
    echo "None of the conditions are true.";
}
?> -->
<!-- <?php
$age=15;
echo($age<18)? "child":"adult";
?> -->

<!-- <?php
$condition = 3;

switch ($condition) {
    case 1:
        echo "Condition is 1.";
        break;
    case 2:
        echo "Condition is 2.";
        break;
    case 3:
        echo "Condition is 3.";
        break;
    case 4:
        echo "Condition is 4.";
        break;
    case 5:
        echo "Condition is 5.";
        break;
    default:
        echo "Condition does not match any case.";
        break;
}
?> -->
<!-- <html>
    <head>
         <title>Colored text with PHP</title>
         <style>
            .red{
                color:red;
            }
            .blue{
                color:blue;
            }
            .green{
                color:green;
            }

            </style>
        </head>

    <body>
        <h1>colored text with php</h1>
        <?php

        echo'<p class="red">This is red.</p>';
        echo'<p class="blue">This is blue.</p>';
        echo'<p class="green">This is green.</p>';
        ?>
    </body>
    </html> -->

    <!-- <html>
        <body>
        <pre>

        <?php
            $a1=array("red","green");
            $a2=array("blue","yellow");

            print_r(array_merge($a1,$a2));

            ?>
            </pre>
</body>
</html> -->


<!-- <?php
$count = 0;
$limit = 5;

while ($count < $limit) {
    echo "This is iteration number $count.\n";
    $count++;
}
?> -->


<!-- <?php
$count = 0;
$limit = 5;

do {
    echo "This is iteration number $count.\n";
    $count++;
} while ($count < $limit);
?> -->

<!-- <?php
$colors=array("Red","Green","Blue");
foreach($colors as $value){
    echo "$value <br>";
}
?> -->
<?php
function factorial($number) {
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}

$number = 5; // Change this value to calculate the factorial of a different number
echo "The factorial of $number is " . factorial($number) . ".";
?>
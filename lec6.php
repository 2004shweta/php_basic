<!-- <?php
// Define two arrays
$keys = ["first", "second", "third", "fourth", "fifth"];
$values = ["A", "B", "C", "D", "E"];

// Combine the arrays
$combinedArray = array_combine($keys, $values);

// Check if the arrays were combined successfully
if ($combinedArray === false) {
    echo "The arrays could not be combined.";
} else {
    // Print the resulting associative array
    foreach ($combinedArray as $key => $value) {
        echo "Key: $key, Value: $value\n";
        echo "<br>";
    }
}
?> -->


<!-- <?php

$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$b=array("e"=>"pink","f"=>"purple","g"=>"orange");

$result=array_merge($a,$b);
print_r($result);
?> -->

<!-- <?php

$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $b=array("e"=>"pink","f"=>"purple","g"=>"orange");

$result=array_flip($a);
print_r($result);
?> -->

<?php
funcion add($a,$b){
    echo $a+$b;
}
add(2,"3 semester");
?>
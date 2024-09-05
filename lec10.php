<?php
function CallAll($x ,$y){
    echo($x+$y);
    echo "<br>";
    echo($x-$y);
    echo "<br>";
    echo($x*$y);
    echo "<br>";
    echo($x/$y);
    echo "<br>";
    echo($x%$y);
    echo "<br>";
}
$x=10;
$y=5;
CallAll($x,$y);
?>
<?php
function binarytodecimal($binarynum){
    $decinum=0;
    $i=0;


    while($binarynum!=0){
        $rem=$binarynum%10;
        $binarynum/=10;
        $decinum=$decinum+$rem*pow(2,$i);
        $i++;

    }
    return $decinum;
}
    
    $binarynum=101;
    $decinum=binarytodecimal($binarynum);
    echo "Binary number is $binarynum";
?>
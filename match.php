<?php
$email = "example@gmail.com";

$pattern ="/^[a-zA-Z0-9._%+-]+@[a-zA-z0-9.-]+\.[a-zA-Z]{2,}$/";
 if(preg_match($pattern, $email)){
    echo "valid email address";
 }else{
    echo "invalid email address";
 }
 ?>
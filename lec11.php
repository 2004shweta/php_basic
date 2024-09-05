<?php
function A1($x){
    switch($x){
        case 1:
            if($x==1)
                echo "case 1 was executed.";
                break;
            case 2:
                if($x==2)
                    echo "case 2 was executed.";
                    break;
            case 3:
                 if($x==3)
                     echo "case 2 was executed.";
                    break;

            case 4:
                if($x==4)
                    echo "case 2 was executed.";
                     break;
                    default;
                echo "default was excuted";
                    
                
            
    }
}
A1(9);
?>
<?php
list($K)=sscanf(trim(fgets(STDIN)),"%d");
list($A,$B)=sscanf(trim(fgets(STDIN)),"%d %d");
$calc = floor($A / $K);
$calc2 = $A % $K;
if($calc2 == 0){
    print("OK");
    exit;
}
$cc2 = $calc * $K + $K;
if(($cc2 >= $A)&&($cc2 <= $B)){
    print("OK");
}else{
    print("NG");
}


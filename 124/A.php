<?php
list($A,$B)=sscanf(trim(fgets(STDIN)),"%d %d");
$t = 0;
if($A > $B){
    $t += $A;
    $A--;
}else{
    $t += $B;
    $B--;
}
if($A > $B){
    $t += $A;
    $A--;
}else{
    $t += $B;
    $B--;
}
print($t);
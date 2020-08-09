<?php
list($A,$B,$K)=sscanf(trim(fgets(STDIN)),"%d %d %d");
$A -= $K;
if($A < 0) {
    $B += $A;
    $A = 0;
}
if($B < 0) $B = 0;
printf("%d %d",$A,$B);

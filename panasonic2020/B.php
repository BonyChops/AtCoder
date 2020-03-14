<?php
list($H,$W)=sscanf(trim(fgets(STDIN)),"%d %d");
if($H == 1){
    echo 1;
    exit;
}
if($W == 1){
    echo 1;
    exit;
}

$p1 = ceil($W / 2);
$p2 = floor($W / 2); //きりすて
$calc = 0;
$calc = $p1 * ceil($H/2);
$calc += $p2 * floor($H/2);
echo (int)$calc;
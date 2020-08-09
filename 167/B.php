<?php
list($A,$B,$C,$K)=sscanf(trim(fgets(STDIN)),"%d %d %d %d");

$amari = $K - $A;
if($amari <= 0){
    print($K);
    exit;
}
$amari -= $B;
if($amari <= 0){
    print($A);
    exit;
}
print($A - $amari);

<?php
 list($N)=sscanf(trim(fgets(STDIN)),"%d");
if($N <= 10){
    print($N);
    exit;
}
$base = $N - 9;
$time = floor(($base-1) /3);
$plus = $base % 3;

 if (strlen($time + 1) > 2){
    $skip += strlen($time + 1)*9;
}

if (strlen($time + 1) == 2){
    $skip += 1;
} 

$base += $skip;

if($plus == 0){
    $plus = 3;
}
$skip = 0;


print((10 * ($time + 1)) + $plus - $skip); 

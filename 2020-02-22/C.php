<?php
$N = fgets(STDIN);
$Xs = fgets(STDIN);
$X = array();
$format = "%d";
$formated="";
for($i=0;$i<$N;$i++){
    $formated = $formated.' '.$format;
}
$X = sscanf($Xs,$formated);
$min = 50000000000;
$sum = 0;
for($p=0;$p<=100;$p++){
    for($i=0;$i<$N;$i++){
        $sum += (((int)$X[$i] - $p)**2);
    }
    if(($min > $sum)&&($sum >= 0)){
        $min = $sum;
    }
    $sum = 0;
}
echo $min;
<?php
list($N,$L)=sscanf(trim(fgets(STDIN)),"%d %d");
$total = 0;
$total2 = 0;
for($i=1;$i<=$N;$i++){
    $total += $i + $L - 1;
}

$min = 8888888888888;
for($j = 1; $j <= $N; $j++){
    for($i=1;$i<=$N;$i++){
        if($j != $i){
            $total2 += $i + $L - 1;
        }
    }
        if (abs($total - $total2) < $min){
            $min = abs($total - $total2);
            $age = $total2;
        }
        $total2 = 0;
    
}
printf($age);
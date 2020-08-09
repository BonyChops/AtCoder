<?php
list($X,$M)=sscanf(trim(fgets(STDIN)),"%d %d");

$total = 0;
while($M != $X + 2){

    $now = $X+1;
    //print((($now - $M) + 1));
    while((($now - $M) + 1) > 0){
        $total += ($now - $M) + 1;
        $now--;
        
    }
    //print($total."\n");
    $M++;
}
print($total);
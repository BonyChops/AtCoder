<?php
list($N,$M)=sscanf(trim(fgets(STDIN)),"%d %d");
$A = 0;
$W = array();
$cnt=1;
$cntt=0;
$ch = array();
$sumW = 0;
for($i=0;$i<$M;$i++){

    list($p,$S)=sscanf(trim(fgets(STDIN)),"%d %s");
    if(!isset($ch[$p])) $ch[$p] = 0;
    if(!isset($W[$p])) $W[$p] = 0;
    if ($ch[$p] == 0){
        if($S == 'AC'){
            $A++;
            $ch[$p] = 1;
            $sumW += $W[$p];
        }else{
            $W[$p]++;
        }
    }
}
printf("%d %d",$A,$sumW);
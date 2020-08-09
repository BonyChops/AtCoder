<?php
list($N,$M)=sscanf(trim(fgets(STDIN)),"%d %d");
//N 偶数
//M 奇数
$cnt = 0;
for($i=0;$i<$M+$N;$i++){
    for($j=$i+1;$j<$M+$N;$j++){
        $a=1;
        $b=1;
        if($i < $N){
            $a=0;
        }
        if($j < $N){
            $b=0;
        }
        if(($a + $b)%2 == 0){
            $cnt++;
        }
        
    }
}
printf($cnt);
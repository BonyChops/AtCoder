<?php
list($N,$X,$Y)=sscanf(trim(fgets(STDIN)),"%d %d %d");
$nums = array();
for($i=1;$i<$N;$i++){
    //print("[".$i."]\n");
    for($j=$i+1;$j<=$N;$j++){
        $dif = $j-$i;
        if((abs($X-$i)+1+abs($j-$Y)) < $dif){
            $dif = (abs($X-$i)+1+abs($j-$Y));
        }
        if($dif > 0){
            if(!isset($nums[$dif])){
                $nums[$dif] = 1;
            }else{
                $nums[$dif]++;
            }
        }
        //print($dif."   \n");
    }
    //printf("\n");
}
for($i=1;$i<$N;$i++){
    if(!isset($nums[$i])){
        print("0"."\n");
    }else{
        print($nums[$i]."\n");
    }
}


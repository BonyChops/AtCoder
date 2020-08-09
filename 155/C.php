<?php
$S = array();
$N = fgets(STDIN);
for($i=0; $i<$N; $i++){
    $iS = fgets(STDIN);
    $iS = str_replace("\r\n","",$iS);
    if(!isset($S[$iS])){
        $S[$iS] = 1;
    }else{
        $S[$iS]++;
    }
}
arsort($S);
$max=current(array_slice($S,0,1,true));
$cnt=0;
for($i=0; $i<$N; $i++){
    if (current(array_slice($S,$i,1,true)) == $max){
        $cnt++;
    }else{
        break;
    }

}
if($cnt = 1){
    printf(key(array_slice($last,0,1,true)));
    exit;
}
$last = array_slice($S,0,$cnt,true);
ksort($last);
for($i=0; $i<$N; $i++){
    if($i != 0) printf("\n");
    printf(key(array_slice($last,$i,1,true)));
}

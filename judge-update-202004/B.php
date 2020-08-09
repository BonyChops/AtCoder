<?php
list($N)=sscanf(trim(fgets(STDIN)),"%d");
$R=array();
$B=array();
for($i=0;$i<$N;$i++){
    list($X,$C)=sscanf(trim(fgets(STDIN)),"%d %s");
    if($C == "R"){
        $R[$i] = $X;
    }else{
        $B[$i] = $X;
    }
}
sort($R);
sort($B);

foreach($R as $v){
    print($v."\n");
}
foreach($B as $v){
    print($v."\n");
}

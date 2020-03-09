<?php
list($S,$T)=sscanf(trim(fgets(STDIN)),"%d %d");
$r="";
if($S < $T){
    for($i=0;$i<$T;$i++){
        $r = $r.$S;
    }
}else{
    for($i=0;$i<$S;$i++){
        $r = $r.$T;
    }
}
printf($r);
<?php
list($N)=sscanf(trim(fgets(STDIN)),"%d");
$S = array();
for ($i=0; $i < $N; $i++) { 
    list($W)=sscanf(trim(fgets(STDIN)),"%s");
    if(!isset($S[$W])){
        $S[$W] = 1;
    }else{
        $S[$W]++;
    }
}
print(count($S));
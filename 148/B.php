<?php
list($N)=sscanf(trim(fgets(STDIN)),"%d");
list($S,$T)=sscanf(trim(fgets(STDIN)),"%s %s");
$unchi="";

for($i=0; $i<$N; $i++){
    $unchi = $unchi.$S[$i].$T[$i];
    
}
printf($unchi);
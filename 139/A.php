<?php
list($S)=sscanf(trim(fgets(STDIN)),"%s");
list($T)=sscanf(trim(fgets(STDIN)),"%s");
$cnt=0;
for($i=0;$i<3;$i++){
    if($S[$i] == $T[$i]){
        $cnt++;
    }
}
printf($cnt);

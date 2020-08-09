<?php
list($X)=sscanf(trim(fgets(STDIN)),"%d");
$cnt=0;

for($i=1;$i<=$X;$i++){
    if($i % 2 == 1){
        $cnt++;
    }
}
printf(($cnt/$X));
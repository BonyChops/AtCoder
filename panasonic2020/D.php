<?php
list($N)=sscanf(trim(fgets(STDIN)),"%d");
$str = "";
for($i=1;$i<=$N;$i++){
    $str = $str."a";
}
printf($str."\n");
for($i=1;$i<$N;$i++){
    for($j=0;$j<$i-1;$j++){
        $str[$N-1-$i+1] = chr(ord($str[$N-1-$i+1+1])+1);
        printf($str."\n");
    }
}
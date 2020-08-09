<?php
$query = trim(fgets(STDIN));
list($a,$b) = sscanf($query,"%d %d");
for($i=1; $i<=10000; $i++){
    if(((intval((float)$i * 0.08) == $a)&&(intval((float)$i * 0.1) == $b))){
        printf($i);
        exit;
    }
}
printf(-1);
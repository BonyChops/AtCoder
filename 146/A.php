<?php
list($S)=sscanf(trim(fgets(STDIN)),"%s");
$week = [ "MON","TUE","WED","THU","FRI","SAT","SUN" ];
$cnt = 10;
for($i=0;$i<7;$i++){
    $cnt++;
    if($S == $week[$i]) $cnt=0;
}
if($cnt==0) $cnt = 7;
printf($cnt);
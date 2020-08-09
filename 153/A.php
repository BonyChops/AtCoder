<?php
list($H,$A) = sscanf(trim(fgets(STDIN)),"%d %d");
$cnt=0;
while($H>0){
    $H -= $A;
    $cnt++;
}
printf($cnt);
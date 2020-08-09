<?php
list($X)=sscanf(trim(fgets(STDIN)),"%d");
$bank = 100;
$cnt = 0;
while($bank < $X){
    $bank += floor($bank*0.01);
    $cnt++;
}
print($cnt);
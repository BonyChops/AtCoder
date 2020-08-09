<?php
list($A,$B)=sscanf(trim(fgets(STDIN)),"%d %d");
$cnt=1;
$cos=0;
while($cnt<$B){
    $cnt+= $A-1;
    $cos++;
}
print($cos);
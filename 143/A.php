<?php
list($A,$B)=sscanf(trim(fgets(STDIN)),"%d %d");
$calc = $A - ($B * 2);
if($calc < 0 )$calc = 0;
printf($calc);
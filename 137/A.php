<?php
list($A,$B)=sscanf(trim(fgets(STDIN)),"%d %d");
$max=-10000;
$calc=$A+$B;
if($calc>$max) $max = $calc;
$calc=$A-$B;
if($calc>$max) $max = $calc;
$calc=$A*$B;
if($calc>$max) $max = $calc;
printf($max);
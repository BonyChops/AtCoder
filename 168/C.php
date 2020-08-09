<?php


list($A,$B,$H,$M)=sscanf(trim(fgets(STDIN)),"%d %d %d %d");
$A = floatval($A);
$B = floatval($B);
$H = floatval($H);
$M = floatval($M);
$hourSin = floatval($A*sin(deg2rad(floatval($H / 12)*(-360) +90)));
$hourCos = floatval($A*cos(deg2rad(floatval($H / 12)*(-360)+90)));
$minSin = floatval($B*sin(deg2rad(floatval($M / 60)*(-360)+90)));
$minCos = floatval($B*cos(deg2rad(floatval($M / 60)*(-360)+90)));

$cm = (($hourSin - $minSin)**2 + ($hourCos - $minCos)**2)**(0.5);
echo $cm;
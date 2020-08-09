<?php
list($X)=sscanf(trim(fgets(STDIN)),"%d");
//$X=100;
$fivehun = floor($X / 500);
$five = floor((($X - ($fivehun * 500) )/ 5));
print($fivehun * 1000 + $five * 5);


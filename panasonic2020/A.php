<?php
list($K)=sscanf(trim(fgets(STDIN)),"%d");
$AAA = array(1, 1, 1, 2, 1, 2, 1, 5, 2, 2, 1, 5, 1, 2, 1, 14, 1, 5, 1, 5, 2, 2, 1, 15, 2, 2, 5, 4, 1, 4, 1, 51);
var_dump($AAA);
echo (int)$AAA[$K-1];
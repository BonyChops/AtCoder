<?php
list($X)=sscanf(trim(fgets(STDIN)),"%d");
$a = $X - 400;
$b = floor($a / 200);
print((8 - $b));
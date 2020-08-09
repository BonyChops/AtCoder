<?php
list($N,$K)=sscanf(trim(fgets(STDIN)),"%d %d");
list($S)=sscanf(trim(fgets(STDIN)),"%s");
$S[$K-1] = strtolower($S[$K-1]);
print($S);
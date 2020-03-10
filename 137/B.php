<?php
list($K,$X)=sscanf(trim(fgets(STDIN)),"%d %d");
$S = "";
for($i=$X-$K+1; $i < $X+$K; $i++){
    $S = $S.$i." ";
}
printf($S);
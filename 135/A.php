<?php
list($A,$B)=sscanf(trim(fgets(STDIN)),"%d %d");
$calc = ($A+$B)/2;
if(is_int($calc)){
    printf($calc);
}else{
    printf("IMPOSSIBLE");
}
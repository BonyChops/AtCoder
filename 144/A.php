<?php
list($A,$B)=sscanf(trim(fgets(STDIN)),"%d %d");
if(($A < 10)&&($B < 10)){
    printf($A*$B);
}else{
    printf(-1);
}
<?php
list($S,$T)=sscanf(trim(fgets(STDIN)),"%s %s");
list($A,$B)=sscanf(trim(fgets(STDIN)),"%d %d");
list($U)=sscanf(trim(fgets(STDIN)),"%s");
if($U == $S){
    printf("%d %d",$A-1, $B);
}else{
    printf("%d %d",$A, $B-1);
}
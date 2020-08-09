<?php
list($S,$W)=sscanf(trim(fgets(STDIN)),"%d %d");
if($S <= $W){
    printf("unsafe");
}else{
    printf("safe");
}
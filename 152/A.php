<?php
list($S,$T)=sscanf(trim(fgets(STDIN)),"%d %d");
if($S == $T){
    printf("Yes");
}else{
    printf("No");
}
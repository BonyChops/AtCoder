<?php
list($X)=sscanf(trim(fgets(STDIN)),"%d");
if(strpos($X,'7') !==FALSE){
    printf("Yes");
}else{
    printf("No");
}
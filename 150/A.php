<?php
list($K,$X)=sscanf(trim(fgets(STDIN)),"%d %d");
if(500 * $K >= $X){
    printf("Yes");
}else{
    printf("No");
}
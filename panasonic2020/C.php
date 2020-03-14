<?php
list($A,$B,$C)=sscanf(trim(fgets(STDIN)),"%d %d %d");

if(((real)sqrt($A) + (real)sqrt($B))< (real)sqrt($C)){
    printf("Yes");
}else{
    printf("No");
}

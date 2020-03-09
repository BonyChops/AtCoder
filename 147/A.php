<?php
list($A1,$A2,$A3)=sscanf(trim(fgets(STDIN)),"%d %d %d");
if(($A1+$A2+$A3) >= 22){
    printf("bust");
}else{
    printf("win");
}
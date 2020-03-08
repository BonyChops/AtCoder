<?php 
list($A,$B,$C) = sscanf(fgets(STDIN),"%d %d %d");
if(($A == $C)&&($A != $B)){
    printf("Yes");
    exit;
}
if(($A == $B)&&($A != $C)){
    printf("Yes");
    exit;
}
if(($C == $B)&&($A != $C)){
    printf("Yes");
    exit;
}
printf("No");
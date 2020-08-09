<?php
list($A,$B,$C,$D)=sscanf(trim(fgets(STDIN)),"%d %d %d %d");
if(ceil($A / $D) >= ceil($C / $B)){
    print("Yes");
}else{
    print("No");
}
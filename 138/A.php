<?php
list($a)=sscanf(trim(fgets(STDIN)),"%d");
list($s)=sscanf(trim(fgets(STDIN)),"%s");
if($a >= 3200){
    printf($s);
}else{
    printf("red");
}
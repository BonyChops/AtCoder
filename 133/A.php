<?php
list($N,$A,$B)=sscanf(trim(fgets(STDIN)),"%d %d %d");
if($A*$N > $B){
    print($B);
}else{
    print($A*$N);
}
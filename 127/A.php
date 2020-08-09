<?php
list($A,$B)=sscanf(trim(fgets(STDIN)),"%d %d");
if($A <= 5){
    print(0);
}else if(($A >= 6)&&($A <= 12)){
    print($B /2);
}else{
    print($B);
}

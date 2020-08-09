<?php
list($S,$L,$R)=sscanf(trim(fgets(STDIN)),"%d %d %d");
if(($S >= $L)&&($S <= $R)){
    print($S);
    exit;
}
if($S < $L){
    print($L);
}else{
    print($R);
}

<?php 
list($N)=sscanf(trim(fgets(STDIN)),"%d");
list($S)=sscanf(trim(fgets(STDIN)),"%s");
if($N % 2 == 1){
    printf("No");
    exit;
}
$l = (int)$N/2;
if(substr($S,0,$l) == substr($S,$l*-1)){
    printf("Yes");
}else{
    printf("No");
}
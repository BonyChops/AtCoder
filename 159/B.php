<?php
list($S)=sscanf(trim(fgets(STDIN)),"%s");
if($S != strrev($S)){
    printf("No");
    exit;
}
if (substr($S,0,((strlen($S)-1-1)/2)+1) != strrev(substr($S,0,((strlen($S)-1-1)/2+1)))){
    printf("No");
    exit;
}

if(substr($S,((strlen($S)+3)/2)-1) != strrev(substr($S,((strlen($S)+3)/2)-1))){
    printf("No");
    exit;
}
printf("Yes");
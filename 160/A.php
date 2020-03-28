<?php
list($S)=sscanf(trim(fgets(STDIN)),"%s");
if(($S[2] == $S[3])&&($S[4] == $S[5])){
    printf("Yes");
}else{
    printf("No");
}
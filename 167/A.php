<?php
list($S)=sscanf(trim(fgets(STDIN)),"%s");
list($T)=sscanf(trim(fgets(STDIN)),"%s");
if((strpos($T,$S) !== FALSE)&&($S[0] == $T[0])&&(strlen($T) == strlen($S) + 1)){
    print("Yes");
}else{
    print("No");
}
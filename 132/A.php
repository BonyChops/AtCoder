<?php
list($S)=sscanf(trim(fgets(STDIN)),"%s");
$S1 = substr($S,0,2);
$S2 = substr($S,-2);
if(($S[0] == $S[1])&&($S[0] == $S[3])){
    printf("No");
    exit;
}
if(($S[0] == $S[1])&&($S[0] == $S[2])){
    printf("No");
    exit;
}
if(($S[0] == $S[1])&&($S[2] == $S[3])){
    printf("Yes");
    exit;
}

if($S1 == $S2){
    printf("Yes");
    exit;
}
if($S1 == strrev($S2)){
    printf("Yes");
    exit;
}
print("No");
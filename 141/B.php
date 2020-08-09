<?php
list($S)=sscanf(trim(fgets(STDIN)),"%s");
for($i=0;$i<strlen($S);$i++){
    if($i % 2 == 0){
        if($S[$i] == "L"){
            printf("No");
            exit;
        }
    }else{
        if($S[$i] == "R"){
            printf("No");
            exit;
        }
    }
}
printf("Yes");
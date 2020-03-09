<?php
list($A)=sscanf(trim(fgets(STDIN)),"%d");
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        if($i*$j == $A){
            printf("Yes");
            exit;
        }
    }
}
printf("No");
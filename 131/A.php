<?php
list($S)=sscanf(trim(fgets(STDIN)),"%s");
$buf="";
for($i=0;$i<4;$i++){
    if($buf == $S[$i]){
        print("Bad");
        exit;
    }
    $buf = $S[$i];
}
print("Good");
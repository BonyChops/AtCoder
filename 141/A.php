<?php
$name=["Sunny", "Cloudy", "Rainy"];
list($S)=sscanf(trim(fgets(STDIN)),"%s");
for($i=0;$i<=2;$i++){
    if($name[$i] == $S){
        $current = $i;
    }
}
$current++;
if($current > 2){
    $current = 0;
}
printf($name[$current]);
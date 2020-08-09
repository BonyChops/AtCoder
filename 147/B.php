<?php
list($S)=sscanf(trim(fgets(STDIN)),"%s");
$h = (int)(strlen($S)/2);
$a = substr($S,0,$h);
$b = strrev(substr($S,$h*-1));
$cnt = 0;
for($i=0;$i<$h;$i++){
    if($a[$i] != $b[$i]){
        $cnt++;
    }
}
printf($cnt);
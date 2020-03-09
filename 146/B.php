
<?php
list($N)=sscanf(trim(fgets(STDIN)),"%d");
list($S)=sscanf(trim(fgets(STDIN)),"%s");
for($i=0;$i<strlen($S);$i++){
    $num = (ord($S[$i])+$N);
    if($num > ord('Z')) $num = $num - ord('Z') + ord('A') - 1;
    $S[$i] = chr($num);
}
printf($S);
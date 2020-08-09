<?php
list($S) = sscanf(trim(fgets(STDIN)), "%s");
list($T) = sscanf(trim(fgets(STDIN)), "%s");
$cnt = 0;
for ($i=0; $i < strlen($S); $i++) {
    if($S[$i] != $T[$i]){
        $cnt++;
    }
}
print($cnt);
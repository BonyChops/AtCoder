<?php
list($S) = sscanf(trim(fgets(STDIN)), "%s");
list($T) = sscanf(trim(fgets(STDIN)), "%s");
$d = [];
for ($i = 0; $i < strlen($S) - strlen($T) + 1; $i++) {
    $cnt = 0;
    for ($j = 0; $j < strlen($T); $j++) {
        if ($S[$i+ $j] != $T[$j]) {
            $cnt++;
        }
    }
    $d[$i] = $cnt;
}
asort($d);
//var_dump($d);
//$first = array_shift($d);
print(array_shift($d));

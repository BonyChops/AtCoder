<?php
list($L, $R, $d) = sscanf(trim(fgets(STDIN)), "%d %d %d");
$cnt = 0;
for ($i = $L; $i <= $R; $i++) {
    if ($i % $d == 0) {
        $cnt++;
    }
}
print($cnt);

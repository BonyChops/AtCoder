<?php
$a = sscanf(trim(fgets(STDIN)), "%d %d %d %d %d");

for ($i = 0; $i < 5; $i++) {
    if ($a[$i] == 0) {
        print($i + 1);
    }
}

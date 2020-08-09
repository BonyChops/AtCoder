<?php
list($N, $D) = sscanf(trim(fgets(STDIN)), "%d %d");
$c = 0;
for ($i = 0; $i < $N; $i++) {
    list($X, $Y) = sscanf(trim(fgets(STDIN)), "%d %d");
    if(sqrt($X**2+$Y**2) <= $D) $c++;
}
print($c);
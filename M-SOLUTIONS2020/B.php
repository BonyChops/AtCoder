<?php
list($A, $B, $C) = sscanf(trim(fgets(STDIN)), "%d %d %d");
list($K) = sscanf(trim(fgets(STDIN)), "%d");
for ($i = 0; $i < $K; $i++) {
    if ($B <= $A) {
        $B *= 2;
    } else if ($C <= $B) {
        $C *= 2;
    } else {
        break;
    }
}
if (($A < $B) && ($B < $C)) {
    print("Yes");
} else {
    print("No");
}

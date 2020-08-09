<?php
list($A, $V) = sscanf(trim(fgets(STDIN)), "%d %d");
list($B, $W) = sscanf(trim(fgets(STDIN)), "%d %d");
list($T) = sscanf(trim(fgets(STDIN)), "%d");
if ($B + $W * $T <= $A + $V * $T) {
    print("YES");
} else {
    print("NO");
}

<?php
list($X) = sscanf(trim(fgets(STDIN)), "%d");
if ($X % 1000 == 0) {
    print("0");
} else {
    print(1000 - ($X % 1000));
}

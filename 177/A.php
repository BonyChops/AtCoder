<?php
list($D, $T, $S)=sscanf(trim(fgets(STDIN)),"%d %d %d");

print(ceil($D / $S) <= $T ? "Yes" : "No");
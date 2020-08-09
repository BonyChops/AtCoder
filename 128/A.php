<?php
list($A,$P)=sscanf(trim(fgets(STDIN)),"%d %d");
print(floor(($A*3 + $P) / 2));
<?php
list($X, $Y) = sscanf(trim(fgets(STDIN)), "%d %d");
print((($Y >= $X * 2) && ($Y <= $X * 4) && ($Y % 2 == 0)) ? 'Yes' : 'No');

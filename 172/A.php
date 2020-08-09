<?php
list($a) = sscanf(trim(fgets(STDIN)), "%d");
print($a+$a**2+$a**3);
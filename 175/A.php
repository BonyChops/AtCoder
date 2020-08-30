<?php
list($N,$X,$T)=sscanf(trim(fgets(STDIN)),"%d %d %d");
print(ceil($N / $X) * $T);
<?php
list($A,$B,$T)=sscanf(trim(fgets(STDIN)),"%d %d %d");
print(floor($T/$A)*$B);
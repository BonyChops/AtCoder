<?php
list($S)=sscanf(trim(fgets(STDIN)),"%s");
printf(chr(ord($S)+1));
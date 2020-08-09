<?php 
list($N)=sscanf(trim(fgets(STDIN)),"%d");
list($S)=sscanf(trim(fgets(STDIN)),"%s");
printf(substr_count($S,'ABC'));

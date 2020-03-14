<?php
list($N,$D)=sscanf(trim(fgets(STDIN)),"%d %d");
printf(ceil($N/($D*2+1)));
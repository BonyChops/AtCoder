<?php
$query = fgets(STDIN);
list($N,$N1) = sscanf($query,"%d %d");
echo strlen(base_convert($N, 10, $N1));
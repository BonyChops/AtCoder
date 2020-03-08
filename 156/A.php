<?php
$query = fgets(STDIN);
list($N, $R) = sscanf($query,"%d %d");
if($N<10){
    $R = (100*(10-$N))+$R;
}
printf($R);
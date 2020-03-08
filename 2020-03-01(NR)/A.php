<?php
$query = trim(fgets(STDIN));
if($query%2 == 1){
    $query += 1;
}
printf($query/2);

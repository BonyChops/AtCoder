<?php 
$q = trim(fgets(STDIN));
$a = "";
for($i=0;$i<strlen($q);$i++){
    $a = $a."x";
}
printf($a);
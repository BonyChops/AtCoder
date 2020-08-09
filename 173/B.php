<?php
list($N) = sscanf(trim(fgets(STDIN)), "%d");
$ar = [
    "AC" => 0,
    "WA" => 0,
    "TLE" => 0,
    "RE" => 0
];
for ($i = 0; $i < $N; $i++) {
    list($S) = sscanf(trim(fgets(STDIN)), "%s");
    $ar[$S]++;
}
foreach($ar as $key => $value){
    print("{$key} x {$value}\n");
}
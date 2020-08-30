<?php


list($N, $M) = sscanf(trim(fgets(STDIN)), "%d %d");
$n = [];
for ($i = 0; $i < $M; $i++) {
    list($A, $B) = sscanf(trim(fgets(STDIN)), "%d %d");
    if (!isset($n[$A])) $n[$A] = [];
    if (!isset($n[$B])) $n[$B] = [];
    $n[$A][$B] = $B;
    $n[$B][$A] = $A;
}
$max = 0;
$gr = [];
$cnt = $grCnt = $grMax = 0;
foreach ($n as $key => $v) {
    if ($cnt !== 0) {
        for ($i = 0; $i < $grMax; $i++) {
            if (lSearch($v, $gr[$i])) {
                break;
            }
        }
        if ($i > $grMax || $i == 0) {
            array_push($gr, []);
            $grMax == $i;
        }
    }
    array_push($gr[$i], $key);
    array_shift($n);
    $cnt++;
}
var_dump($gr);
// var_dump($n);
//print($max + 1);
function lSearch($ne, $ha)
{
    foreach ($ne as $n) {
        if (array_search($ha, $n) !== false) {
            return true;
        }
    }
    return false;
}

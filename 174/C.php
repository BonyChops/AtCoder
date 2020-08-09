<?php
list($K) = sscanf(trim(fgets(STDIN)), "%d");
$max = 10**6;
$a = 7;
$cnt = 1;
if($K < 7 || $K % 2 == 0){
    print(-1);
    exit();
}
while(true){
    if($a % $K == 0){
        print($cnt);
        exit();
    }
    $a = (int)$a.'7';
    $cnt++;
}
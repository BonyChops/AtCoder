<?php
$a=array();
for($i=0;$i<3;$i++){
    $query = trim(fgets(STDIN));
    $a[$i] = sscanf($query,"%d %d %d");
}
$N = trim(fgets(STDIN));
for($i=0;$i<$N;$i++){
    $b = trim(fgets(STDIN));
    for($j=0;$j<3;$j++){
        for($m= 0;$m<3;$m++){
            if ($b == $a[$j][$m]){
                $a[$j][$m] = -1;
            }
        }
    }
}
for($i=0;$i<3;$i++){
    if(($a[$i][ 0] == $a[$i][1])&&($a[$i][1] == $a[$i][2])){
        printf("Yes");
        exit;
    }
}
for($i=0;$i<3;$i++){
    if(($a[ 0][$i] == $a[1][$i])&&($a[1][$i] == $a[2][$i])){
        printf("Yes");
        exit;
    }
}
if(($a[ 0][ 0] == $a[1][1])&&($a[1][1] == $a[2][2])){
        printf("Yes");
        exit;
}
if(($a[ 0][2] == $a[1][1])&&($a[1][1] == $a[2][ 0])){
    printf("Yes");
    exit;
}

printf("No");

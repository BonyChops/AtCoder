<?php
list($X)=sscanf(trim(fgets(STDIN)),"%d");
list($S)=sscanf(trim(fgets(STDIN)),"%s");
$nums = array();
$R = array();
$G = array();
$B = array();
for ($i=0; $i < strlen($S); $i++) { 
/*     if(!isset($nums[$S[$i]])){
        $nums[$S[$i]] = 1;
    }
    else{
        $nums[$S[$i]] ++;
    } */
    switch($S[$i]){
        case 'R':
            array_push($R,$i);
        break;
        case 'G':
            array_push($G,$i);
        break;
        case 'B':
            array_push($B,$i);
        break;
    }
}
/* var_dump($nums);
var_dump($R);
var_dump($G);
var_dump($B); */
$cnt = 0;
for ($i=0; $i < sizeof($R); $i++) { 
    for ($j=0; $j < sizeof($G); $j++) { 
        for ($m=0; $m < sizeof($B); $m++) {
            $f = $R[$i]+1;
            $s = $G[$j]+1;
            $t = $B[$m]+1;
            if($f > $s){
                list($f, $s) = [$s, $f];
            }
            if($s > $t){
                list($s, $t) = [$t, $s];
            }
            if($f > $s){
                list($f, $s) = [$s, $f];
            }

            if(($s - $f) != ($t - $s)){
                $cnt++;
            }
        }
    }
}
print($cnt);
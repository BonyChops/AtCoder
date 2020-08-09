<?php
list($X)=sscanf(trim(fgets(STDIN)),"%d");
$cnt = 0;
for ($i=1; $i <= $X; $i++) { 
    for ($j=1; $j <= $X ; $j++) { 
        for ($m=1; $m <= $X ; $m++) { 
            //var_dump([$i,$j,$m]);
            //$now = lcm_n([$i,$j,$m]);
            $now = false;
            while ($now == false){
                if(($i <= 3)){
                    $now = $i;
                }else if($j <= 3){
                    $now = $j;
                }else if($m <= 3){
                    $now = $m;
                }else if ($i == $j){
                    $now =gcd($m, $i);
                }else if ($i == $m){
                    $now = gcd($i, $j);
                }else if($j == $m){
                    $now =gcd($i, $j);
                }else{
                    $i = gcd($i, $j);
                    $j = $i;
                }
            }

            //print($now);
            $cnt += $now;
        }
    }
}
print($cnt);

function lcm_n($array) {
	$l = $array[0];
	for ( $i = 1; $i < sizeof($array); $i++) {
		$l = lcm($l, $array[$i]);
	}
	return $l;
}

/* function gcd($m, $n) {
    while ($m % $n != 0) {
    $temp = $n;
    $n = $m % $n;
    $m = $temp;
    }
    return $n;
} */

function gcd($m, $n) {
    $mt = $m;
    $nt = $n;
   
    while($end != true){
        $flag = false;
        $cnt = 1;
        $i = 2;
        while ($flag == false) {
            if (($mt % $i == 0)&&($nt % $i == 0)){
                $mt = $mt / $i;
                $nt = $nt / $i;
                $flag == true;
                $cnt *= $i;
            }
            if($i >= 7){
                $end = true;
                $flag = true;
            }
            $i++;
        }
    }

    return $cnt;
}


//最小公倍数を求める
function lcm($m, $n) {
return $m * $n / gcd($m, $n);
}
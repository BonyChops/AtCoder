<?php
list($a)=sscanf(trim(fgets(STDIN)),"%s");
list($b)=sscanf(trim(fgets(STDIN)),"%s");
list($c)=sscanf(trim(fgets(STDIN)),"%s");
$len = strlen($a);
for($w=0;$w<3;$w++){

    for($i=0; $i<strlen($a); $i++){
        if($a[$i] == $b[0]){
            $bufa = substr($a, $i);
            $bufb = substr($b, 0, strlen($bufb));
            if($bufa == $bufb){
                $a = substr($a, 0, $i+1).$b;
            }
        }
    
        if($b[$i] == $a[0]){
            $bufb = substr($b, $i);
            $bufa = substr($a, 0, strlen($bufb));
            if($bufa == $bufb){
                $a = substr($b, 0, $i+1).$a;
            }
        }
        if($a[$i] == $c[0]){
            $bufa = substr($a, $i);
            $bufc = substr($c, 0, strlen($bufa));
            if($bufa == $bufc){
                $a = substr($a, 0, $i).$c;
            }
        }
    }
}
printf($a);
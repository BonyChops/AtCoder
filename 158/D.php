<?php
$S = trim(fgets(STDIN));  
$Q = trim(fgets(STDIN));
$front = "";
$back = "";
$turn = 0;
for($i=0; $i<$Q; $i++){
    $query = trim(fgets(STDIN));
    list($mode,$F,$word) = sscanf($query,"%d %d %s");
    if($mode == 1){
        if ($turn == 0){
            $turn = 1;
        }else{
            $turn = 0;
        }
    }else{
        if($turn == 0){
            if($F == 1){
                $front = $word.$front;
            }else{
                $back = $back.$word;
            }
        }else{
            if($F == 2){
                $front = $word.$front;
            }else{
                $back = $back.$word;
            }
        }

    }
}

$str = $front.$S.$back;
if($turn == 1){
    $str=strrev($str);
}
printf($str);
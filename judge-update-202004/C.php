<?php
list($A,$B,$C)=sscanf(trim(fgets(STDIN)),"%d %d %d");
$num = array();
$num = array_pad($num,$A+$B+$C,true);
$calc = $A+$B+$C;
for($i=$A+$B+$C;$i>=1;$i--){
    $tmp = $i;
    for($j=0;$j<$A-1;$j++){
        for($i=$A+$B+$C;$i>=1;$i--){
            del();
        }
    }

}

function del(){
    global $calc, $num;
    for($i=$calc;$i>=1;$i--){
        if($num[$i] == true){
            $num[$i] = false;
            return $i;
        }
    }
    return false;
}
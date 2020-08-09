<?php
list($N)=sscanf(trim(fgets(STDIN)),"%d");
$L = substr($N, -1 ,1);
if($L == 3){
    echo "bon";
}else if(($L == 0)||($L == 1)||($L == 6)||($L == 8)){
    echo "pon";
}else{
    echo "hon";
}
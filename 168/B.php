<?php
list($K)=sscanf(trim(fgets(STDIN)),"%d");
list($S)=sscanf(trim(fgets(STDIN)),"%s");

if(strlen($S) > $K){
    echo substr($S, 0, $K)."...";
}else{
    echo $S;
}
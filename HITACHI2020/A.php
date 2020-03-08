<?php
$q = str_replace("\r\n","",trim(fgets(STDIN)));
$len = strlen($q);
$next = $q;
if(strlen($q) == 1){
    printf("No");
    exit;
}
for($j=0; $j<$len-1; $j++){
    $buf = $next;
    if(substr($buf,0,2) != "hi"){
        printf("No");
        exit;
    }
    if (strlen($buf) == 2){
        printf("Yes");
        exit;
    }
    //printf($buf."]\n");
    if ($buf[2] != 'h'){
        printf("No");
        exit;
    }
    $next = substr($buf,2);
}

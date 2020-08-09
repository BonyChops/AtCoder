<?php
list($N,$K)=sscanf(trim(fgets(STDIN)),"%d %d");
if ($N%$K < abs(($N%$K) - $K)){
    print($N%$K);
}else{
    print(abs(($N%$K) - $K));
}

<?php
list($S) = sscanf(trim(fgets(STDIN)), "%s");
if(ctype_upper($S)){
    print("A");
}else{
    print("a");
}
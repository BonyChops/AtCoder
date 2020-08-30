<?php
list($N)=sscanf(trim(fgets(STDIN)),"%s");
$sum = 0;
for ($i=0; $i < strlen($N); $i++) {
    $sum += substr($N,$i,1);
}
print($sum % 9 == 0 ? 'Yes' : 'No');
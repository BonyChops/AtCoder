<?php
list($X)=sscanf(trim(fgets(STDIN)),"%d");

$total = ($X*($X+1))/2;
for ($i=0; $i <= $X; $i+= 3) { 
    $total -= $i;
}
for ($i=0; $i <= $X; $i+= 5) { 
    $total -= $i;
}

for ($i=0; $i <= $X; $i+= 15) { 
    $total += $i;
}


printf($total);
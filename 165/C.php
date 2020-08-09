<?php
list($N,$M,$Q)=sscanf(trim(fgets(STDIN)),"%d %d %d");
$a = $d = array();
for ($i=0; $i < $Q ; $i++) { 
    list($a['a'][$i], $a['b'][$i],$a['c'][$i], $a['d'][$i])=sscanf(trim(fgets(STDIN)),"%d %d %d %d");

}
foreach($a['d'] as $key => $value){
    $d[$key] = $value;
}
var_dump($a);
var_dump($d);
array_multisort($d, SORT_DESC, $a);
var_dump($a);
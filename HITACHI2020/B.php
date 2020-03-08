<?php
// From https://qiita.com/yoshikyoto/items/6924478283dbdd549e4b
class Scanner {
    private $arr = [];
    private $count = 0;
    private $pointer = 0;
    public function next() {
        if($this->pointer >= $this->count) {
            $str = trim(fgets(STDIN));
            $this->arr = explode(' ', $str);
            $this->count = count($this->arr);
            $this->pointer = 0;
        }
        $result = $this->arr[$this->pointer];
        $this->pointer++;
        return $result;
    }
    public function hasNext() {
        return $this->pointer < $this->count;
    }
    public function nextInt() {
        return (int)$this->next();
    }
    public function nextDouble() {
        return (double)$this->next();
    }
}
list($A,$B,$M) = sscanf(trim(fgets(STDIN)),"%d %d %d");
$a=array();
$b=array();
$amin = 100000;
$sc = new Scanner();
for($i=0; $i<$A; $i++){
    $a[$i] = $sc->nextInt();
    if($amin > $a[$i]) $amin = $a[$i];
}
$bmin = 100000;
$sc = new Scanner();
for($i=0; $i<$B; $i++){
    $b[$i] = $sc->nextInt();
    if($bmin > $b[$i]) $bmin = $b[$i];
}
$min = 100000000;

$calc = $amin + $bmin;
if($min > $calc) $min = $calc;


for($i=0; $i<$M; $i++){
    list($x,$y,$c) = sscanf(trim(fgets(STDIN)),"%d %d %d");
    $calc = $a[$x-1] + $b[$y-1] - $c;
    
    if($min > $calc) $min = $calc;
}
if($min < 0){
    $min = 0;
}
printf($min);

//$n = $sc->nextInt();
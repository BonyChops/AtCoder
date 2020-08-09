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
// From https://qiita.com/yoshikyoto/items/6924478283dbdd549e4b
list($K,$N)=sscanf(trim(fgets(STDIN)),"%d %d");
$A = array();
$max = 0;
$sc = new Scanner();
//$n = 
for($i=1;$i<=$N;$i++){
    $A[$i] = $sc->nextInt();
    if($i != 1){
        if(abs($A[$i] - $A[$i-1]) > $max){
            $max = abs($A[$i] - $A[$i-1]);
            $pos = $i;
        }
    }
}
if((($K - $A[$N]) + $A[1]) > $max){
    $pos = 1;
    $max = (($K - $A[$N]) + $A[1]);
}
$calc = 0;
for($i=1;$i<=$N-1;$i++){
    if($pos == $N){
        $calc +=(($K - $A[$N]) + $A[1]);
        
        $pos = 0;
    }else{
        $calc += ($A[$pos+1] - $A[$pos]);
    }

    $pos++;
}

print($calc);
//$n = $sc->nextInt();



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
list($S,$S1,$S2)=sscanf(trim(fgets(STDIN)),"%d %d %d");
$sum=0;
$sc = new Scanner();
for($i=0;$i<$S-1;$i++){
    $n = $sc->nextInt();
    $sum += $n;
}
$calc = ($S2 * $S) - $sum;
if($calc > $S1){
    printf(-1);
}else{
    if($calc < 0) $calc = 0;
    printf($calc);
}
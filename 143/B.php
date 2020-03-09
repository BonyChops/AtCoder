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
list($N)=sscanf(trim(fgets(STDIN)),"%d");
$sc = new Scanner();
$n = array();
for($i=0;$i<$N;$i++){
    $n[$i] = $sc->nextInt();
}
$sum = 0;
for($i=0;$i<$N-1;$i++){
    for($j=$i+1;$j<$N;$j++){
        if($i != $j){
            $sum = $sum + ($n[$i] * $n[$j]);
        }
    }
}
printf($sum);
//
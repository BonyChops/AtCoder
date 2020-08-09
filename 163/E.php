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
list($X)=sscanf(trim(fgets(STDIN)),"%d");
$num = array();
$sc = new Scanner();
for ($i=0; $i < $X; $i++) { 
    # code...
    $n = $sc->nextInt();
    $num[$i] = $n;
}
arsort($num);
$total = 0;
$min = 1;
$max = $X;
for ($i=0; $i < ceil($X/2); $i++) { 
    # code...
    $now = current($num);
    $pos = key($num) + 1;

    if(abs($pos - $min) < abs($max - $pos)){
        $calc = abs($max - $pos);
        $total += $num[$max - 1] * $calc;
        $max--;
    }else{
        $calc = abs($pos - $min);
        $total += $num[$min - 1] * $calc;
        $min++;
    }
    $total += $now * $calc;
    next($num);
}
$total++;
print($total."\n");



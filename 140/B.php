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
list($N)=sscanf(trim(fgets(STDIN)),"%d");
$sc = new Scanner();
$A=array();
for($i=0;$i<$N;$i++){
    $A[$i] = $sc->nextInt();
}
$sc = new Scanner();
$B=array();
for($i=0;$i<$N;$i++){
    $B[$i] = $sc->nextInt();
}
$sc = new Scanner();
$C=array();
for($i=0;$i<$N-1;$i++){
    $C[$i] = $sc->nextInt();
}
$sum=0;
$pre=11111111;
for($i=0;$i<$N;$i++){
    $sum += $B[$A[$i]-1];
    if($pre == $A[$i]-1-1){
        $sum += $C[$pre];
    }
    $pre = $A[$i]-1;
}
printf($sum);
//
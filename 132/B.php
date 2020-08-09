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
list($n)=sscanf(trim(fgets(STDIN)),"%d");
$sc = new Scanner();
$p=array();
for($i=1;$i<=$n;$i++){
    $p[$i] = $sc->nextInt();
}
$cnt = 0;
for($i=1+1;$i<=$n-1;$i++){
    if(($p[$i] > $p[$i-1])&&($p[$i] < $p[$i+1])){
        $cnt++;
    }else if(($p[$i] < $p[$i-1])&&($p[$i] > $p[$i+1])){
        $cnt++;
    }
}
printf($cnt);
//$
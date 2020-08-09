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


list($N,$D)=sscanf(trim(fgets(STDIN)),"%d %d");
$X = array();
for($j=1;$j<=$N;$j++){
    $sc = new Scanner();
    for($i=1;$i<=$D;$i++){
        $X[$j][$i] = $sc->nextInt();
    }
}
$sum = 0;
$cnt = 0;
for($i=1;$i<=$N;$i++){
    for($j=$i+1;$j<=$N;$j++){
        for($k=1;$k<=$D;$k++){
            $sum += pow(($X[$i][$k]-$X[$j][$k]),2);
        }
        $sum = sqrt($sum);
        if(preg_match('/^[0-9]+$/', $sum)){
            $cnt++;
        }
        $sum = 0;
    }
}
printf($cnt);

//$n = $sc->nextInt();
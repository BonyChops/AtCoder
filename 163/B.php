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
$bu = array();
$sc = new Scanner();

for ($i=0; $i < $N-1; $i++) { 
    $n = $sc->nextInt();
    if(!isset($bu[$n])){
        $bu[$n] = 1;
    }else{
        $bu[$n] += 1;
    }
}
for ($i=1; $i <= $N; $i++) { 

    if(!isset($bu[$i])){
        print("0"."\n");
    }else{
        print($bu[$i]."\n");
    }
}
//

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
list($N,$X)=sscanf(trim(fgets(STDIN)),"%d %d");
$sc = new Scanner();
$total = 0;
$cnt=1;
for ($i=0; $i < $N; $i++) { 
    # code...
    $n = $sc->nextInt();
    $total += $n;
    if($total > $X){
        print($cnt);
        exit;
    }
    $cnt++;
}

//

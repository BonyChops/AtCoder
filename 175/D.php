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


list($H,$W)=sscanf(trim(fgets(STDIN)),"%d %d");
list($Ch,$Cw)=sscanf(trim(fgets(STDIN)),"%d %d");
list($Dh,$Dw)=sscanf(trim(fgets(STDIN)),"%d %d");
$S = [];
for ($i=1; $i <= $W; $i++) {
    for ($j=1; $i <= $H; $j++) {
        list($S[$i][$j])=sscanf(trim(fgets(STDIN)),"%s");
    }
}
print($cnt);
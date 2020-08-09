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
list($A)=sscanf(trim(fgets(STDIN)),"%d");
$p=array();
$sc = new Scanner();
for($i=0;$i<$A;$i++){
    $p[$i] = $sc->nextInt();
}
$buf = $p;
sort($buf);
$cnt=0;
for($i=0;$i<$A;$i++){
    if($p == $buf){
        printf("YES");
        exit;
    }
    if($p[$i] != $buf[$i]){
        $p[$i] = $buf[$i];
        $cnt++;
    }
    if($cnt == 3){
        printf("NO");
        exit;
    }
}
if($p == $buf){
    printf("YES");
    exit;
}
printf("NsO");
exit;
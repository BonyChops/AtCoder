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
$A = array();
for($i=0;$i<$N;$i++){
    $A[$i] = $sc->nextInt();
}
for($e=0;$e<$N;$e++){
    $pat=array();
    $cnt=0;
    for($i=0;$i<$N;$i++){
        if($i != $e){
            if($target =(array_key_exists($A[$i],$pat) ) === FALSE){
                $pat[$A[$i]] = 1;
            }else{
                $pat[$A[$i]]+= 1;
            };
        }
    }
    foreach($pat as $value){
        for($i=$value-1;$i>=1;$i--){
            $cnt += $i;
        }
    }
    printf($cnt."\n");
}
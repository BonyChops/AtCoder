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
list($N,$M,$X)=sscanf(trim(fgets(STDIN)),"%d %d %d");
$As = array();
$Cs = [];
for ($j=0; $j < $N; $j++) {
    $sc = new Scanner();
    $Cs[$j] = $sc->nextInt();
    for ($i=0; $i < $M; $i++) {
        $As[$j][$i]= $sc->nextInt();
    }
}

$books = 1;
$anss = [];
while(true){
    $pt = [];
    for ($i=0; $i < $books; $i++) {
        array_push($pt, $i);
    }
    $check = [];
    $check[0] = 0;
    foreach($pt as $p){
        $check[0] += $Cs[$p];
        for ($k=0; $k < $M; $k++) {
            if(isset($check[$k+1])){
                $check[$k+1] += $As[$p][$k];
            }else{
                $check[$k+1] = $As[$p][$k];
            }
        }
    }

}
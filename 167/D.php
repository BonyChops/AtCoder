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
list($N,$K)=sscanf(trim(fgets(STDIN)),"%d %d");
$As = [];
$sc = new Scanner();
for ($i=0; $i < $N; $i++) {
    $As[$i] = $sc->nextInt();
}
//$startPt
$ptC = [];
$pt = [];
$pt[0] = 0;
$pt[1] = $As[$pt[0]]-1;
$pos = $pt[1];
$cnt = 2;
$ptC[0] = $ptC[$pt[1]] = true;
while(true){
    $pt[$cnt] = $As[$pt[$cnt-1]]-1;
    $pos = $pt[$cnt];
    if($cnt == $K){
        print($pos+1);
        exit;
    }
    if(isset($ptC[$pos])){
        $startPt = array_search($pos, $pt);
        $pt = array_slice($pt ,$startPt);
        break;
    }
    $ptC[$pos] = true;
    $cnt++;
}
print($pt[($K - $startPt) % (count($pt)-1)]+1);
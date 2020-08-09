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
list($X,$Y,$A,$B,$C)=sscanf(trim(fgets(STDIN)),"%d %d %d %d %d");
$sc = new Scanner();
$As = array();
for($i=0;$i<$A;$i++){
    $As[$i] = $sc->nextInt();
}

$Bs = array();
for($i=0;$i<$B;$i++){
    $Bs[$i] = $sc->nextInt();
}

$Cs = array();
for($i=0;$i<$C;$i++){
    $Cs[$i] = $sc->nextInt();
}

rsort($As);
rsort($Bs);
rsort($Cs);
$yum = 0;
$Ccnt = 0;
for($i = 0; $i<$X; $i++){
    if(!isset($As[$i])){
        $As[$i] = 0;
    }
    if(!isset($Cs[$Ccnt])){
        $Cs[$Ccnt] = 0;
    }
    if($As[$i] > $Cs[$Ccnt]){
        $yum += $As[$i];
    }else{
        $yum += $Cs[$Ccnt];
        $Ccnt++;
    }
    //print($yum."\n");
}
//var_dump($As);


for($i = 0; $i<$Y; $i++){
    if(!isset($Bs[$i])){
        $Bs[$i] = 0;
    }
    if(!isset($Cs[$Ccnt])){
        $Cs[$Ccnt] = 0;
    }
    if($Bs[$i] > $Cs[$Ccnt]){
        $yum += $Bs[$i];
    }else{
        $yum += $Cs[$Ccnt];
        $Ccnt++;
    }
    //print($yum."\n");
}

print($yum);

//$n = $sc->nextInt();
<?php
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
$N = fgets(STDIN);
$A = array();
$sc = new Scanner();
for($i=0;$i<$N; $i++){
    $A[$i] = $sc->nextInt();
    if($A[$i] %2 == 0){
        if(($A[$i] %3 != 0)&&($A[$i] %5 != 0)){
            printf("DENIED");
            exit;
        }
    }
}

printf("APPROVED");

<?php
// From https://qiita.com/yoshikyoto/items/6924478283dbdd549e4b
class Scanner
{
    private $arr = [];
    private $count = 0;
    private $pointer = 0;
    public function next()
    {
        if ($this->pointer >= $this->count) {
            $str = trim(fgets(STDIN));
            $this->arr = explode(' ', $str);
            $this->count = count($this->arr);
            $this->pointer = 0;
        }
        $result = $this->arr[$this->pointer];
        $this->pointer++;
        return $result;
    }
    public function hasNext()
    {
        return $this->pointer < $this->count;
    }
    public function nextInt()
    {
        return (int)$this->next();
    }
    public function nextDouble()
    {
        return (float)$this->next();
    }
}
// From https://qiita.com/yoshikyoto/items/6924478283dbdd549e4b

list($N) = sscanf(trim(fgets(STDIN)), "%d");
$sc = new Scanner();
$calc = 1;
for ($i = 0; $i < $N; $i++) {
    $calc *= $sc->nextInt();
    if($calc == 0){
        print("0");
        exit();
    }
    if($calc > 10**18){
        print("-1");
        exit();
    }
}
print($calc);

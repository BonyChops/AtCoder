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
$n = [];
$sc = new Scanner();
for ($i = 0; $i < $N; $i++) {
    $n[$i] = $sc->nextInt();
}
$calc = 0;
for ($i=0; $i < $N-1; $i++) {
    for ($j=$i + 1; $j < $N; $j++) {
        $calc += $n[$i] * $n[$j];
    }
}
print($calc >= 10**9 + 7 ? $calc % (10**9+7) : $calc);
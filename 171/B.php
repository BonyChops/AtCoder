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


list($N, $K) = sscanf(trim(fgets(STDIN)), "%d %d");
$item = [];
$sc = new Scanner();
for ($i = 1; $i <= $N; $i++) {
    $item[$i] = $sc->nextInt();
}

sort($item);
$sum = 0;
for ($i = 0; $i < $K; $i++) {
    $sum += $item[$i];
}
print($sum);

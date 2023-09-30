package main

import (
	"fmt"
	"math"
)

func main() {
	var a, b int
	fmt.Scan(&a, &b)
	fmt.Println(int(math.Pow(float64(a), float64(b)) + math.Pow(float64(b), float64(a))))
}

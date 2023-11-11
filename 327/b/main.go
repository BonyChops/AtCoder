package main

import (
	"fmt"
)

func pow(n int64) int64 {
	t := int64(1)
	for i := int64(0); i < n; i++ {
		t *= n
	}
	return t
}

func main() {
	var b int64
	fmt.Scan(&b)

	a := int64(0)

	for {
		t := pow(a)
		if t == b {
			fmt.Println(a)
			return
		}
		if t > b {
			fmt.Println("-1")
			return
		}
		a += 1
	}
}

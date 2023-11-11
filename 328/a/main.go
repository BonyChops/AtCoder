package main

import (
	"fmt"
)

func main() {
	var n, x int
	fmt.Scan(&n, &x)
	ss := make([]int, n)

	var t int
	for i := range ss {
		fmt.Scan(&ss[i])
		if ss[i] <= x {
			t += ss[i]
		}
	}

	fmt.Println(t)

}

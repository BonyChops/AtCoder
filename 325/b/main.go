package main

import (
	"fmt"
)

func main() {
	var n int
	fmt.Scan(&n)
	w := make([]int, n)
	x := make([]int, n)
	for i := 0; i < n; i++ {
		fmt.Scan(&w[i], &x[i])
	}

	var maxp int
	for i := 0; i < 24; i++ {
		var total int
		for j := range w {
			ctime := i + x[j]
			if ctime >= 24 {
				ctime -= 24
			}

			if ctime >= 9 && ctime <= 17 {
				total += w[j]
			}
		}
		if maxp < total {
			maxp = total
		}
	}

	fmt.Println(maxp)
}

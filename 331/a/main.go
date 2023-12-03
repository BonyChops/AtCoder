package main

import (
	"fmt"
)

func main() {
	var M, D int
	fmt.Scan(&M, &D)
	var y, m, d int
	fmt.Scan(&y, &m, &d)
	d += 1

	if d > D {
		m += 1
		d = 1
	}
	if m > M {
		y += 1
		m = 1
	}
	fmt.Printf("%d %d %d\n", y, m, d)
}

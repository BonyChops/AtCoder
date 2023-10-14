package main

import (
	"fmt"
)

type D struct {
	x int
	y int
	z int
}

func main() {
	var n int
	fmt.Scan(&n)
	d := make([]D, n)
	for i := range d {
		var x, y, z int
		fmt.Scan(&x, &y, &z)
		d[i] = D{x, y, z}
	}

}

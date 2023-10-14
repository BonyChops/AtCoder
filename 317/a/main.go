package main

import (
	"fmt"
)

func main() {
	var n, h, x int
	fmt.Scan(&n, &h, &x)
	p := make([]int, n)
	for i := range p {
		fmt.Scan(&p[i])
	}
	for i, p := range p {
		if p+h >= x {
			fmt.Println(i + 1)
			return
		}
	}

}

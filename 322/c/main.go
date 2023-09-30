package main

import (
	"fmt"
)

func main() {
	var n, m int
	fmt.Scan(&n, &m)
	a := make([]int, m)
	for i := range a {
		fmt.Scan(&a[i])
	}
	c := 1
	for _, a := range a {
		tmp := a - c
		for i := tmp; i >= 0; i-- {
			fmt.Println(i)
			c += 1
		}
	}
}

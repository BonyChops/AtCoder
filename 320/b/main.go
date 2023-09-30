package main

import (
	"fmt"
)

func c(s string, p, n int) int {
	var d int
	for {
		d += 1
		if p-d < 0 || p+d >= n || s[p-d] != s[d+p] {
			return (d-1)*2 + 1
		}
	}
}

func c2(s string, p, n int) int {
	var d int
	for {
		d += 1
		if p-(d-1) < 0 || p+d >= n || s[p-(d-1)] != s[d+p] {
			return (d - 1) * 2
		}
	}
}

func main() {
	var s string
	fmt.Scan(&s)
	var b int
	for i := range s {
		r := c(s, i, len(s))
		if r > b {
			b = r
		}
		r = c2(s, i, len(s))
		if r > b {
			b = r
		}
	}
	fmt.Println(b)
}

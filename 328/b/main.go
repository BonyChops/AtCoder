package main

import (
	"fmt"
	"strconv"
)

func c(d, m int) int {
	ch := strconv.Itoa(m)
	var tc rune
	for i, c := range ch {
		if i == 0 {
			tc = c
		}

		if tc != c {
			return 0
		}
	}

	var ttl int
	var t string
	for {
		t += string(strconv.Itoa(m)[0])
		if n, _ := strconv.Atoi(t); n <= d {
			ttl += 1
		} else {
			return ttl
		}
	}
}

func main() {
	var n int
	fmt.Scan(&n)
	d := make([]int, n)

	var t int
	for i := range d {
		fmt.Scan(&d[i])
		t += c(d[i], i+1)
	}
	fmt.Println(t)
}

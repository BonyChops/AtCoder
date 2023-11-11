package main

import (
	"fmt"
)

func main() {
	var n, q int
	fmt.Scan(&n, &q)
	var s string
	fmt.Scan(&s)

	b := make([][]int, n)
	for j := range b {
		b[j] = make([]int, n)
	}

	for j := range b {
		var res bool
		if j != 0 {
			res = s[j] == s[j-1]
		}

		for i := 0; i < j; i++ {
			if j != 0 {
				b[i][j] = b[i][j-1]
			}
			if res {
				b[i][j] += 1
			}
		}
	}

	// for _, a := range b {
	// 	fmt.Println(a)
	// }
	// fmt.Println(b)

	l := make([]int, q)
	r := make([]int, q)

	for i := range l {
		fmt.Scan(&l[i], &r[i])

		t := b[l[i]-1][r[i]-1]
		fmt.Println(t)
	}

}

package main

import (
	"fmt"
)

var ans int

func scan(went []bool, rp *[][]int, p, t, cd, n int) {
	went[p] = true
	if p == t {
		if ans < cd {
			ans = cd
		}
	}
	for i := 0; i < n; i++ {
		if went[i] || (*rp)[p][i] == 0 {
			continue
		}

		newWent := make([]bool, n)
		copy(newWent, went)
		scan(newWent, rp, i, t, cd+(*rp)[p][i], n)
	}
}

func main() {
	var n, m int
	fmt.Scan(&n, &m)
	rp := make([][]int, n)
	for i := range rp {
		rp[i] = make([]int, n)
	}
	for i := 0; i < m; i++ {
		var a, b, c int
		fmt.Scan(&a, &b, &c)
		rp[a-1][b-1] = c
		rp[b-1][a-1] = c
	}
	var maxn int
	for i := 0; i < n-1; i++ {
		for j := i; j < n; j++ {
			went := make([]bool, n)
			ans = 0
			scan(went, &rp, i, j, 0, n)
			if ans > maxn {
				maxn = ans
			}
		}
	}
	fmt.Println(maxn)
}

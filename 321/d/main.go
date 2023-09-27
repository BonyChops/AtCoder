package main

import (
	"fmt"
	"sort"
)

func main() {
	var n, m int
	var p int64
	fmt.Scan(&n, &m, &p)
	a := make([]int64, n)
	b := make([]int64, m)
	for i := 0; i < n; i++ {
		fmt.Scan(&a[i])
	}
	for i := 0; i < m; i++ {
		fmt.Scan(&b[i])
	}
	sort.Slice(b, func(i, j int) bool { return b[i] < b[j] })
	sum_b := make([]int64, m)
	sum_b[0] = b[0]
	for i := 0; i < m-1; i++ {
		sum_b[i+1] = sum_b[i] + b[i+1]
	}

	var t int64
	for i := 0; i < n; i++ {
		// a + b <= p
		// b <= p - a
		minj := sort.Search(m, func(j int) bool { return b[j] >= p-a[i] })
		if minj >= 1 {
			t += sum_b[minj-1]
		}
		t += a[i]*int64(minj) + int64(m-minj)*p
	}
	fmt.Println(t)
}

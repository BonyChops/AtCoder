package main

import (
	"fmt"
	"sort"
)

func calc(a []int, na, n, x int) int {
	a[n-1] = na
	sort.Slice(a, func(i, j int) bool { return a[i] < a[j] })
	// fmt.Println(a)
	var sum int
	for i := 1; i < n-1; i++ {
		sum += a[i]
	}
	return sum
}

func main() {
	var n, x int
	fmt.Scan(&n, &x)
	a := make([]int, n-1)
	for i := 0; i < n-1; i++ {
		fmt.Scan(&a[i])
	}
	sort.Slice(a, func(i, j int) bool { return a[i] < a[j] })
	for i := 0; i <= 100; i++ {
		newa := make([]int, n)
		copy(newa, a)
		res := calc(newa, i, n, x)
		// fmt.Println(res, x)
		if res >= x {
			fmt.Println(i)
			return
		}
	}
	fmt.Println(-1)
}

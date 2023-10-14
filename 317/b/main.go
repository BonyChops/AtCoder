package main

import (
	"fmt"
	"sort"
)

func main() {
	var n int
	fmt.Scan(&n)
	a := make([]int, n)
	for i := range a {
		fmt.Scan(&a[i])
	}
	sort.Ints(a)

	for i, ea := range a {
		if ea+1 != a[i+1] {
			fmt.Println(ea + 1)
			return
		}
	}
}

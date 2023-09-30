package main

import (
	"fmt"
	"strconv"
)

func main() {
	var n int
	fmt.Scan(&n)
	var s string
	for i := 0; i <= n; i++ {
		y := make([]int, 0)
		for j := 1; j <= 9; j++ {
			if n%j == 0 {
				y = append(y, j)
			}
		}
		var found bool
		// fmt.Println(y)
		for _, j := range y {
			if i == 0 || i%(n/j) == 0 {
				found = true
				s += strconv.Itoa(j)
				break
			}
		}

		if !found {
			s += "-"
		}
	}
	fmt.Println(s)
}

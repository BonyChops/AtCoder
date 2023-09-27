package main

import (
	"fmt"
	"strconv"
)

func check(n []int) bool {
	b := -1
	for i := 0; i < len(n); i++ {
		if b != -1 {
			if b <= n[i] {
				return false
			}
		}
		b = n[i]
	}
	return true
}

func main() {
	var k int
	fmt.Scan(&k)
	n := make([]int, 1)
	for i := 0; i < k; i++ {
		var done bool
		for j := len(n) - 1; j >= 0; j-- {
			if n[j] >= 9 {
				continue
			}
			if j == 0 || n[j-1] > n[j]+1 {
				n[j] += 1
				for k := j + 1; k < len(n); k++ {
					n[k] = len(n) - 1 - k
				}
				done = true
				break
			}
		}
		if !done {
			n = make([]int, len(n)+1)
			n[0] = len(n) - 1
			for j := 1; j < len(n); j++ {
				n[j] = len(n) - j - 1
			}
		}
		// if !check(n) {
		// 	fmt.Println(n)
		// }
	}
	result := ""
	for _, v := range n {
		result += strconv.Itoa(v)
	}
	fmt.Println(result)
}

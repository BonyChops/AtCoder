package main

import (
	"fmt"
)

func main() {
	var n int
	var s string
	fmt.Scan(&n)
	fmt.Scan(&s)

	for i := 0; i < n; i++ {
		if i == 0 {
			continue
		}

		if s[i] == 'a' && s[i-1] == 'b' || s[i] == 'b' && s[i-1] == 'a' {
			fmt.Println("Yes")
			return
		}
	}
	fmt.Println("No")
}

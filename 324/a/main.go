package main

import (
	"fmt"
)

func main() {
	var n int
	fmt.Scan(&n)
	var b int
	for i := 0; i < n; i++ {
		var a int
		fmt.Scan(&a)
		if i == 0 {
			b = a
		}
		if b != a {
			fmt.Println("No")
			return
		}
	}
	fmt.Println("Yes")
}

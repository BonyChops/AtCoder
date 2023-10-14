package main

import (
	"fmt"
)

func main() {
	var n int
	fmt.Scan(&n)
	for i := 1; ; i *= 2 {
		for j := 1; ; j *= 3 {
			if j > n {
				break
			}
			if n == i*j {
				fmt.Println("Yes")
				return
			}
		}
		if i > n {
			fmt.Println("No")
			return
		}
	}
	// if n%2 == 0 && n%3 == 0 {
	// 	fmt.Println("Yes")
	// } else {
	// 	fmt.Println("No")
	// }
}

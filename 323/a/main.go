package main

import (
	"fmt"
)

func main() {
	var s string
	fmt.Scan(&s)
	for i := 1; i < len(s); i += 2 {
		if s[i] != '0' {
			fmt.Println("No")
			return
		}
	}
	fmt.Println("Yes")
}

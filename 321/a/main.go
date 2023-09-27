package main

import (
	"fmt"
	"strconv"
)

func main() {
	var n int
	fmt.Scan(&n)
	s := strconv.Itoa(n)
	b := -1
	for i := 0; i < len(s); i++ {
		if b != -1 {
			if b <= int(s[i]-'0') {
				fmt.Println("No")
				return
			}
		}
		b = int(s[i] - '0')
	}
	fmt.Println("Yes")
}

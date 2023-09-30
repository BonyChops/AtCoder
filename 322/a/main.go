package main

import (
	"fmt"
	"strings"
)

func main() {
	var n int
	var s string
	fmt.Scan(&n)
	fmt.Scan(&s)
	r := strings.Index(s, "ABC")
	if r == -1 {
		fmt.Println(-1)
	} else {
		fmt.Println(r + 1)

	}
}

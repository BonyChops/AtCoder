package main

import (
	"fmt"
)

func main() {
	var x, y int
	fmt.Scan(&x, &y)

	if y-x <= 2 && y-x >= -3 {
		fmt.Println("Yes")
	} else {
		fmt.Println("No")
	}
}

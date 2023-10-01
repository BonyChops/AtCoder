package main

import (
	"bytes"
	"fmt"
)

func main() {
	var n, m int
	fmt.Scan(&n, &m)
	a := make([]int, m)
	for i := range a {
		fmt.Scan(&a[i])
	}
	c := 1
	var buffer bytes.Buffer
	for _, a := range a {
		tmp := a - c
		for i := tmp; i >= 0; i-- {
			buffer.WriteString(fmt.Sprintln(i))
			c += 1
		}
	}
	fmt.Print(buffer.String())
}

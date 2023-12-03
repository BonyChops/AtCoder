package main

import (
	"bytes"
	"fmt"
)

func main() {
	var n, q int
	fmt.Scan(&n, &q)
	var s string
	fmt.Scan(&s)

	b := make([]int, n)
	for i := range b {
		if i == 0 {
			continue
		}

		b[i] = b[i-1]
		if s[i] == s[i-1] {
			b[i] += 1
		}
	}

	// for _, a := range b {
	// 	fmt.Println(a)
	// }
	// fmt.Println(b)

	l := make([]int, q)
	r := make([]int, q)

	var rb bytes.Buffer
	for i := range l {
		fmt.Scan(&l[i], &r[i])

		t := b[r[i]-1] - b[l[i]-1]
		rb.WriteString(fmt.Sprintln(t))
	}

	fmt.Print(rb.String())
}

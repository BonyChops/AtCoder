package main

import (
	"fmt"
	"strings"
)

func main() {
	var n, m int
	var s, t string
	fmt.Scan(&n, &m)
	fmt.Scan(&s)
	fmt.Scan(&t)
	fc := strings.Index(t, s) == 0
	sc := strings.LastIndex(t, s) == (len(t) - len(s))
	var r int
	if fc && sc {
		r = 0
	} else if fc {
		r = 1
	} else if sc {
		r = 2
	} else {
		r = 3
	}
	fmt.Println(r)
}

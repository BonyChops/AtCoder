package main

import (
	"fmt"
	"sort"
	"strings"
)

type Player struct {
	i int
	r int
}

func main() {
	var n int
	fmt.Scan(&n)
	s := make([]string, n)
	r := make([]Player, n)
	for i := range s {
		fmt.Scan(&s[i])
		r[i].i = i
		r[i].r = strings.Count(s[i], "o")
	}

	sort.SliceStable(r, func(i, j int) bool { return r[i].r > r[j].r })
	for i, n := range r {
		if i != len(r)-1 {
			fmt.Printf("%d ", n.i+1)
		} else {
			fmt.Printf("%d", n.i+1)
		}
	}
	fmt.Println("")

}

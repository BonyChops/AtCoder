package main

import (
	"bytes"
	"fmt"
	"sort"
)

type Num struct {
	val, index int
}

func main() {
	var N int
	fmt.Scan(&N)
	a := make([]Num, N)
	for i := range a {
		fmt.Scan(&a[i].val)
		a[i].index = i
	}
	sort.Slice(a, func(i, j int) bool { return a[i].val < a[j].val })
	var t int64
	r := make([]int64, N)
	for i := 0; i < N; i++ {
		t += int64(a[i].val)
	}

	// fmt.Println(a)
	// p = t
	for i := 0; i < N; i++ {
		//find same val
		tmpi := i
		for j := i + 1; j < N; j++ {
			if a[i].val != a[j].val {
				break
			}
			tmpi = j
		}

		t -= int64(a[i].val * (tmpi - i + 1))
		// fmt.Println("---")
		for j := i; j <= tmpi; j++ {
			// fmt.Println("modify: ", a[j].index)
			r[a[j].index] = int64(t)
		}
		i = tmpi
	}
	var b bytes.Buffer
	for i, v := range r {
		var s string
		if i == N-1 {
			s = "%d"
		} else {
			s = "%d "
		}
		b.WriteString(fmt.Sprintf(s, v))
	}
	fmt.Println(b.String())
}

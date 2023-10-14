package main

import (
	"fmt"
	"math"
	"sort"
	"strconv"
)

func nextPermutation(x sort.Interface) bool {
	n := x.Len() - 1
	if n < 1 {
		return false
	}
	j := n - 1
	for ; !x.Less(j, j+1); j-- {
		if j == 0 {
			return false
		}
	}
	l := n
	for !x.Less(j, l) {
		l--
	}
	x.Swap(j, l)
	for k, l := j+1, n; k < l; {
		x.Swap(k, l)
		k++
		l--
	}
	return true
}

func main() {
	var n int
	var s string
	fmt.Scan(&n)
	fmt.Scan(&s)
	ns := make([]int, n)
	for i := range ns {
		var err error
		ns[i], err = strconv.Atoi(string(s[i]))
		if err != nil {
			panic("err")
		}
	}
	sort.Ints(ns)

	tens := make([]int, n+1)
	for i := range tens {
		if i == 0 {
			tens[i] = 1
			continue
		}
		tens[i] = tens[i-1] * 10
	}
	// fmt.Println(tens)

	var c int
	for {
		var t int
		for i, n := range ns {
			t += n * tens[i]
		}
		r := math.Sqrt(float64(t))
		if math.Floor(r) == math.Ceil(r) {
			c += 1
		}
		if !nextPermutation(sort.IntSlice(ns)) {
			break
		}
	}
	fmt.Println(c)
}

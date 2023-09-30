package main

import (
	"fmt"
	"sort"
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
	var c [9]int
	for i := range c {
		fmt.Scan(&c[i])
	}
	// var o [9]int
	o := make([]int, 9)
	for i := range o {
		o[i] = i
	}

	ps := [][]int{
		{0, 1, 2},
		{3, 4, 5},
		{6, 7, 8},
		{0, 3, 6},
		{1, 4, 7},
		{2, 5, 8},
		{0, 4, 8},
		{2, 4, 6},
	}

	var t int64
	var r int64
	for {
		var disapointed bool
		for _, p := range ps {
			if c[p[0]] == c[p[1]] && o[p[0]] < o[p[2]] && o[p[1]] < o[p[2]] {
				disapointed = true
				break
			} else if c[p[1]] == c[p[2]] && o[p[1]] < o[p[0]] && o[p[2]] < o[p[0]] {
				disapointed = true
				break
			} else if c[p[0]] == c[p[2]] && o[p[0]] < o[p[1]] && o[p[2]] < o[p[1]] {
				disapointed = true
				break
			}
		}
		if !disapointed {
			r += 1
		}
		t += 1
		if !nextPermutation(sort.IntSlice(o)) {
			break
		}
	}
	fmt.Printf("%.12f", (float64(r) / float64(t)))
}

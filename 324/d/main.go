package main

import (
	"fmt"
	"math"
	"sort"
	"strconv"
	"strings"
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

func toP(s string) []int {
	l := len(s)
	p := make([]int, l)
	for i := 0; i < l; i++ {
		var err error
		p[i], err = strconv.Atoi(string(s[i]))
		if err != nil {
			panic("err")
		}
	}
	return p
}

func toS(p []int) string {
	var s string
	for _, n := range p {
		s += strconv.Itoa(n)
	}
	return s
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
	target := strings.TrimLeft(toS(ns), "0")

	var c int
	maxV := int(math.Pow10(n))
	for i := 0; i*i < maxV; i++ {
		ip := (strconv.Itoa(i * i))
		isp := strings.Split(ip, "")
		sort.Strings(isp)
		if strings.TrimLeft(strings.Join(isp, ""), "0") == target {
			c += 1
		}
	}

	fmt.Println(c)
}

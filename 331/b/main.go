package main

import (
	"fmt"
	"math"
	"sort"
)

func check(mode, remain, total, S, M, L int, npt, ppt [3]int, c chan int) {
	n := npt[mode]
	p := ppt[mode]
	if mode != 2 {
		for i := -1; remain-i*n >= 0; i++ {
			check(mode+1, remain-(i+1)*n, total+p*(i+1), S, M, L, npt, ppt, c)
		}
	} else {
		i := int(math.Ceil(float64(remain) / 12))
		c <- total + i*p
	}

	if mode == 0 {
		close(c)
	}
}

func main() {
	var N,
		S,
		M,
		L int
	fmt.Scan(&N, &S, &M, &L)

	ppt := [...]int{S, M, L}
	npt := [...]int{6, 8, 12}
	c := make(chan int)
	go check(0, N, 0, S, M, L, npt, ppt, c)

	r := make([]int, 0)

	for {
		res, ok := <-c
		if !ok {
			break
		}
		r = append(r, res)

	}
	// fmt.Println(r)
	sort.Slice(r, func(i, j int) bool { return r[i] < r[j] })
	fmt.Println(r[0])

}

package main

import (
	"fmt"
)

func main() {
	var m int
	fmt.Scan(&m)
	d := make([]int, m)
	var t int
	for i := 0; i < m; i++ {
		fmt.Scan(&d[i])
		t += d[i]
	}
	t += 1
	mid := t / 2
	var ct int
	for i := 0; i < m; i++ {
		ct += d[i]
		if ct >= mid {
			ct -= d[i]
			fmt.Printf("%d %d\n", i+1, (mid - ct))
			return
		}
	}

}

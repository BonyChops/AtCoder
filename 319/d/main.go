package main

import (
	"fmt"
)

func main() {
	var n, m int64
	fmt.Scan(&n, &m)
	l := make([]int64, n)
	for i := 0; i < int(n); i++ {
		fmt.Scan(&l[i])
		l[i] += 1
	}
	w := int64(0)
	for j := int64(0); j < int64(n); j++ {
		w += l[j]
		cp := int64(0)
		ln := int64(1)
		for _, tl := range l {
			if cp+tl > w {
				cp = 0
				ln += 1
			} else {
				cp += tl
			}

			if ln > m {
				break
			}
		}

		// fmt.Println(j, w)
		// fmt.Println(ln, m)
		if ln <= m {
			fmt.Println(w - 1)
			return
		}

	}
}

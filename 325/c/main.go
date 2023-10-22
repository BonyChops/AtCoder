package main

import (
	"fmt"
	"strings"
)

func ch(m *[][]string, c *[][]bool, x, y, w, h, cnt int) int {
	if (*c)[y][x] || (*m)[y][x] != "#" {
		return 0
	}
	(*m)[y][x] = "c"
	(*c)[y][x] = true

	count := 1
	for i := -1; i <= 1; i++ {
		for j := -1; j <= 1; j++ {
			nx := x + j
			ny := y + i
			if (i == 0 && j == 0) || nx < 0 || nx >= w || ny < 0 || ny >= h {
				continue
			}

			count += ch(m, c, nx, ny, w, h, cnt+1)
		}
	}
	return count
}

func main() {
	var h, w int
	fmt.Scan(&h, &w)
	s := make([][]string, h)
	for i := range s {
		var t string
		fmt.Scan(&t)
		s[i] = strings.Split(t, "")
	}
	c := make([][]bool, h) //確認済み
	for i := range c {
		c[i] = make([]bool, w)
	}

	var total int

	for i := 0; i < h; i++ {
		for j := 0; j < w; j++ {
			// tmps := append([][]string{}, s...)
			// for k := range tmps {
			// 	tmps[k] = append([]string{}, tmps[k]...)
			// }
			cnt := ch(&s, &c, j, i, w, h, 0)
			if cnt != 0 {
				total += 1
			}
		}
	}
	fmt.Println(total)
}

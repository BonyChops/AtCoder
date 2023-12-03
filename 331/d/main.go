package main

import (
	// "bytes"
	"bytes"
	"fmt"
	"strings"
)

func main() {
	var n, q int
	fmt.Scan(&n, &q)
	p := make([][]int, n)
	tpl := make([]int64, n)
	for i := range p {
		p[i] = make([]int, n)
		var s string
		fmt.Scan(&s)
		sa := strings.Split(s, "")
		for j := range p[i] {
			if sa[j] == "B" {
				p[i][j] = 1
			}
			// fmt.Println(int64(tpl[i]))
			tpl[i] += int64(p[i][j])
		}
	}
	tpc := make([]int64, n)
	for i := range p {
		for j := range p[i] {
			tpc[j] += int64(p[j][i])
		}
	}
	// fmt.Println(tpl, tpc)

	var buf bytes.Buffer
	for qi := 0; qi < q; qi++ {
		var a, b, c, d int64
		fmt.Scan(&a, &b, &c, &d)
		var t int64
		for i := b; i <= d; i++ {
			tim := int64(c-a) / int64(n)
			t += tpl[i%int64(n)] * tim
			for j := a; j <= c; j++ {
				if tim > 0 && j%int64(n) == 0 {
					j += int64(n)*tim - 1
					fmt.Println("qi: ", qi)
					continue
				}
				// fmt.Println(i, j)
				t += int64(p[i%int64(n)][j%int64(n)])
			}
		}
		buf.WriteString(fmt.Sprintln(t))
	}
	fmt.Print(buf.String())
}

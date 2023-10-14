package main

import (
	"bytes"
	"fmt"
)

// func ca2(t string, td string) bool {
// 	if math.Abs(float64((len(t)-len(td)))) > 1 || len(td) <= len(t) {
// 		return false
// 	}
// 	var c int
// 	for i := 0; i < len(t); i++ {
// 		if i+c >= len(td) {
// 			// tが最後の文字か？
// 			return i == len(t)-1
// 		}
// 		if t[i] != td[i+c] {
// 			c += 1
// 		}

// 		if c > 1 {
// 			return false
// 		}
// 	}
// 	return true
// }

func c(t string, td string) bool {
	if len(td)-len(t) != 1 {
		return false
	}
	var c int
	for i := 0; i < len(td); i++ {
		if i-c >= len(t) {
			return true
		}
		if t[i-c] != td[i] {
			c += 1
		}

		if c > 1 {
			// fmt.Println("2")
			// fmt.Printf("%c %c\n", t[i-c], td[i])
			return false
		}
	}
	return true
}

func c2(t string, td string) bool {
	if len(t) != len(td) {
		return false
	}
	var c int
	for i := 0; i < len(t); i++ {
		if t[i] != td[i] {
			c += 1
			if c > 1 {
				return false
			}
		}
	}
	return true
}

func main() {
	var n int
	var t string
	fmt.Scan(&n, &t)
	s := make([]string, n)
	r := make([]int, 0)
	for i := range s {
		fmt.Scan(&s[i])
		// if i+1 == 2 {
		// 	fmt.Println(c(s[i], t))
		// 	fmt.Println(c(t, s[i]))
		// 	fmt.Println(c2(t, s[i]))
		// }

		if t == s[i] || c(s[i], t) || c(t, s[i]) || c2(t, s[i]) {
			r = append(r, i+1)
		}
	}
	fmt.Println(len(r))
	var buffer bytes.Buffer
	for i, ci := range r {
		if i == len(r)-1 {
			buffer.WriteString(fmt.Sprintf("%d", ci))
			break
		}
		buffer.WriteString(fmt.Sprintf("%d ", ci))
	}
	fmt.Println(buffer.String())

}

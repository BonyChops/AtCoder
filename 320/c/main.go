package main

import (
	"fmt"
	"strconv"
	"strings"
)

const FAILED = 543254325

func main() {
	var m int
	var s [3]string
	fmt.Scan(&m)
	for i := range s {
		fmt.Scan(&s[i])
	}
	min := FAILED
	for i := 0; i <= 9; i++ {
		var rs [3]int
		var r int
		var notFound bool
		for j, st := range s {
			rs[j] = strings.Index(st, strconv.Itoa(i))
			for k := 0; k < j; k++ {
				if rs[k] == -1 {
					continue
				}
				if rs[k] == rs[j] {
					rs[j] = strings.Index(st[(rs[k]+1):], strconv.Itoa(i))
					if rs[j] != -1 {
						break
					}
				}
			}

			if rs[j] == -1 {
				continue
			}

			if rs[j] > r {
				r = rs[j]
			}
		}

		if !found {
			continue
		}

		for j := 0; j < 3-1; j++ {
			for k := j + 1; k < 3; k++ {
				if rs[j] == rs[k] {
					r = (r - (r % m)) + m
				}
			}
		}

		if min > r {
			min = r
		}
	}
	if min != FAILED {
		fmt.Println(min)
	} else {
		fmt.Println(-1)
	}
}

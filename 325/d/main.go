package main

import (
	"fmt"
	"sort"
)

type It struct {
	t, d   int
	used   bool
	failed bool
}

func dumpits(it []It) {
	for _, iit := range it {
		fmt.Printf("%d %d %t %t\n", iit.t, iit.d, iit.used, iit.failed)
	}
}

func dumpit(it It) {
	fmt.Printf("%d %d %t %t\n", it.t, it.d, it.used, it.failed)
}

var debug = false

func main() {
	var n int
	fmt.Scan(&n)
	it := make([]It, n)
	for i := range it {
		fmt.Scan(&it[i].t, &it[i].d)
		it[i].d += it[i].t
	}

	sort.Slice(it, func(i, j int) bool { return it[i].t < it[j].t })

	var cnt int
	for i := range it {
		if it[i].failed {
			continue
		}
		if debug && i >= 4 {
			fmt.Println("-----")
			dumpits(it)
		}

		var tgt int
		min := 999999999999999
		for j, ei := range it[i:] {
			if it[i].t != ei.t {
				break
			}
			if ei.used || ei.failed {
				continue
			}
			l := ei.d - ei.t
			if min > l {
				min = l
				tgt = j + i
			}
		}
		it[tgt].used = true
		cnt += 1
		it[i], it[tgt] = it[tgt], it[i]

		for j := range it[i:] {
			if it[i].t != it[i+j].t {
				// if debug {
				// 	fmt.Println("----")
				// 	fmt.Println(j)
				// 	dumpit(it[i+j])
				// }

				break
			}
			if it[i+j].used {
				continue
			}
			it[i+j].t += 1
			if it[i+j].t > it[i+j].d {
				it[i+j].failed = true
			}
		}
	}
	fmt.Println(cnt)
}

package main

import (
	"fmt"
	"sort"
)

type It struct {
	d    int64
	used bool
}

func dumpits(it []It) {
	for _, iit := range it {
		fmt.Printf("%d %t\n", iit.d, iit.used)
	}
}

func dumpit(it It) {
	fmt.Printf("%d %t\n", it.d, it.used)
}

var debug = false

func main() {
	var n int
	fmt.Scan(&n)
	it := make([]It, n)
	tm := map[int64][]It{}
	key := make([]int64, 0)
	for range it {
		var t, d int64
		fmt.Scan(&t, &d)
		tm[t] = append(tm[t], It{d: d + t})
		index := sort.Search(len(key), func(i int) bool { return key[i] >= t })
		if len(key) <= 0 || index >= len(key) {
			key = append(key, t)
			continue
		}
		if key[index] == t {
			continue
		}
		key = append(key[:index], append([]int64{t}, key[index:]...)...)
	}

	var total int64
	for i := 0; i < len(key); i++ {
		t := key[i]
		if debug {
			fmt.Println(t)
			fmt.Println(key)
			fmt.Println(tm)
		}
		min := int64(9099999999999999999)
		var target *It
		for i, eit := range tm[t] {
			dur := eit.d - t
			if min > dur {
				min = dur
				target = &tm[t][i]
			}
		}

		if target == nil {
			continue
		}

		if debug {
			fmt.Println(len(tm[t]), "must be grater then 0")
		}
		(*target).used = true

		t += 1
		total += 1

		var didAppend bool
		for _, eit := range tm[t-1] {
			dur := eit.d - t
			if !eit.used && dur >= 0 {
				tm[t] = append(tm[t], eit)
				didAppend = true
			}
		}

		if didAppend {
			index := sort.Search(len(key), func(i int) bool { return key[i] >= t })
			if len(key) <= 0 || index >= len(key) {
				key = append(key, t)
				continue
			}
			if key[index] == t {
				continue
			}
			key = append(key[:index], append([]int64{t}, key[index:]...)...)
		}
		if debug {
			fmt.Println(total)
		}
	}
	fmt.Println(total)

}

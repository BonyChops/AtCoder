package main

import (
	"fmt"
	"regexp"
)

func main() {
	var s string
	fmt.Scan(&s)
	re1 := regexp.MustCompile("a|e|i|o|u")
	fmt.Println(re1.ReplaceAllString(s, ""))
}

package main

import (
	"fmt"
	"strings"
)

func getCorner(o [][]string) (int, int, int, int) {
	l := 99999
	t := 99999
	r := 0
	b := 0
	for i := 0; i < 4; i++ {
		for j := 0; j < 4; j++ {
			if o[j][i] == "#" {
				if l > i {
					l = i
				}
				if t > j {
					t = j
				}
				if r < i {
					r = i
				}
				if b < j {
					b = j
				}
			}
		}
	}
	return l, t, r, b
}

func turn(o [][]string) [][]string {
	t := make([][]string, 4)
	for i := 0; i < 4; i++ {
		t[i] = make([]string, 4)
		for j := 0; j < 4; j++ {
			t[i][j] = o[j][3-i]
		}
	}
	return t
}

func showO(o [][]string) {
	for j := 0; j < 4; j++ {
		for i := 0; i < 4; i++ {
			fmt.Print(o[j][i])
		}
		fmt.Println("")
	}
}

func showT(o [4][4]bool) {
	for j := 0; j < 4; j++ {
		for i := 0; i < 4; i++ {
			if o[j][i] {
				fmt.Print("#")
			} else {
				fmt.Print(".")
			}
		}
		fmt.Println("")
	}
}

func check(o [4][4]bool) bool {
	for i := 0; i < 4; i++ {
		for j := 0; j < 4; j++ {
			if !o[i][j] {
				return false
			}
		}
	}
	return true
}

func main() {
	p := make([][][]string, 3)
	for i := range p {
		p[i] = make([][]string, 4)
		for j := range p[i] {
			p[i][j] = make([]string, 4)
			var tmp string
			fmt.Scan(&tmp)
			tmp2 := strings.Split(tmp, "")
			for k := range p[i][j] {
				p[i][j][k] = tmp2[k]
			}
		}
	}
	// fmt.Println(p)

	// 1個目 方向(first angle)
	for fa := 0; fa < 4; fa++ {
		fl, ft, fr, fb := getCorner(p[0])
		for fx := 0; fx < 4; fx++ {
			for fy := 0; fy < 4; fy++ {
				if fx+(fr-fl) >= 4 {
					break
				}
				if fy+(fb-ft) >= 4 {
					continue
				}

				// 2個目 方向(second angle)
				for sa := 0; sa < 4; sa++ {
					sl, st, sr, sb := getCorner(p[1])

					for sx := 0; sx < 4; sx++ {
						for sy := 0; sy < 4; sy++ {
							if sx+(sr-sl) >= 4 {
								break
							}
							if sy+(sb-st) >= 4 {
								continue
							}

							// 3個目 方向(third angle)
							for ta := 0; ta < 4; ta++ {
								tl, tt, tr, tb := getCorner(p[2])

								for tx := 0; tx < 4; tx++ {
									for ty := 0; ty < 4; ty++ {
										if tx+(tr-tl) >= 4 {
											break
										}
										if ty+(tb-tt) >= 4 {
											continue
										}

										var bg [4][4]bool
										var failed bool
										for el := 0; el < 3; el++ {
											vals := [3][6]int{
												{fx, fy, fl, ft, fr, fb},
												{sx, sy, sl, st, sr, sb},
												{tx, ty, tl, tt, tr, tb},
											}
											evals := vals[el]
											x := evals[0]
											y := evals[1]
											l := evals[2]
											t := evals[3]
											// l, t := getLeftTop(p[el])
											for px := 0; px < 4; px++ {
												for py := 0; py < 4; py++ {
													if p[el][py][px] == "#" {
														// 設置を試み
														pttx := px - l + x
														ptty := py - t + y

														bg[ptty][pttx] = true
													}
												}
												if failed {
													break
												}
											}
											if failed {
												break
											}
										}
										if !failed {
											// fmt.Println("!!!!!!!!!!--------------------")

											// showT(bg)
											if check(bg) {
												fmt.Println("Yes")
												return
											}
										}
									}
								}
								p[2] = turn(p[2])
							}
						}
					}
					p[1] = turn(p[1])
				}
			}
		}
		p[0] = turn(p[0])
	}
	fmt.Println("No")
}

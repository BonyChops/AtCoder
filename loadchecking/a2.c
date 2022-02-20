#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main() {
    int a[] = {
        10,
        8,
        14,
        2,
        15,
        14,
        4,
        11,
        7,
        19,
        5,
        8,
        17,
        3,
        5,
        18,
        13,
        10,
        16,
        8,
    };
    srand(time(NULL));
    for (int i = 0; i < 20; i++) {
        int r = a[i] + (rand() % 20) - 10;
        if (r > 19) r = 19;
        if (r < 1) r = 1;
        printf("%d\n", r);
    }
}
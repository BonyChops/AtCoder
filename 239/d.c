#include <stdbool.h>
#include <stdio.h>
#include <string.h>

typedef long long ll;

bool isPrimeNumber(int n) {
    int i;

    if (n < 2) {
        return false;
    }
    for (i = 2; i < n; i++) {
        if (n % i == 0) {
            return false;
        }
    }

    return true;
}

int main(void) {
    int a, b, c, d;
    char buf[8000000];
    fgets(buf, sizeof(buf), stdin);
    sscanf(buf, "%d %d %d %d\n", &a, &b, &c, &d);
    for (int i = a; i <= b; i++) {
        bool r = true;
        for (int j = c; j <= d; j++) {
            r = isPrimeNumber(i + j);
            if (r) break;
        }
        if (!r) {
            puts("Takahashi");
            return 0;
        }
    }
    puts("Aoki");

    return 0;
}
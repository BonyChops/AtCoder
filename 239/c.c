#include <math.h>
#include <stdbool.h>
#include <stdio.h>
#include <string.h>

typedef long long ll;

bool check(ll x, ll y, ll x1, ll y1, ll x2, ll y2) {
    return (x2 - x) * (x2 - x) + (y2 - y) * (y2 - y) == 5;
}

int main(void) {
    ll x1, x2, y1, y2;
    char buf[8000000];
    fgets(buf, sizeof(buf), stdin);
    sscanf(buf, "%lld %lld %lld %lld\n", &x1, &y1, &x2, &y2);
    for (int i = 0; i < 2; i++) {
        for (int j = 0; j < 2; j++) {
            for (int k = 0; k < 2; k++) {
                bool r;
                if (j == 0) {
                    //printf("%lld %lld\n", x1 + (i == 0 ? 1 : -1), y1 + (k == 0 ? 2 : -2));
                    r = check(x1 + (i == 0 ? 1 : -1), y1 + (k == 0 ? 2 : -2), x1, y1, x2, y2);
                } else {
                    //printf("%lld %lld\n", x1 + (i == 0 ? 2 : -2), y1 + (k == 0 ? 1 : -1));
                    r = check(x1 + (k == 0 ? 2 : -2), y1 + (i == 0 ? 1 : -1), x1, y1, x2, y2);
                }
                if (r) {
                    puts("Yes");
                    return 0;
                }
            }
        }
    }
    puts("No");
    /*
    if((x2 - x1) % 2 == 1 || (y2 - y1) % 2 == 1){
        puts("Nos");
        return 0;
    }
    printf("%lld", (x2 - x1) * (x2 - x1) + (y2 - y1) * (y2 - y1));
    */
    // printf("%s", (x2 - x1) * (x2 - x1) + (y2 - y1) * (y2 - y1) == 10 ? "Yes" : "No");
    return 0;
}
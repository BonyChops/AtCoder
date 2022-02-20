#include <math.h>
#include <stdio.h>
#include <string.h>

typedef long long ll;

int main(void) {
    ll n;
    char buf[8000000];
    fgets(buf, sizeof(buf), stdin);
    sscanf(buf, "%lld\n", &n);
    printf("%lld\n", (n < 0 && n % 10 != 0) ? (n / 10) - 1 : n / 10);
    return 0;
}
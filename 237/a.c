#include <stdio.h>

typedef long long ll;

int main(void) {
    ll i;
    ll t = (ll)1 << (ll)31;
    char buf[1000000];
    fgets(buf, sizeof(buf), stdin);
    sscanf(buf, "%lld\n", &i);
    printf("%s", -t <= i && i < t ? "Yes" : "No");
    return 0;
}
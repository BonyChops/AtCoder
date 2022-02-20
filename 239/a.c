#include <math.h>
#include <stdio.h>
#include <string.h>

typedef long long ll;

int main(void) {
    int n;
    char buf[8000000];
    fgets(buf, sizeof(buf), stdin);
    sscanf(buf, "%d\n", &n);
    printf("%lf", sqrt((double)n * ((double)12800000 + (double)n)));
    return 0;
}
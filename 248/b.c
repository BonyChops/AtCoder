#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <stdbool.h>
#include <math.h>

typedef long long ll;

int main(void){
    int n;
    char buf[8000000];
    fgets(buf, sizeof(buf), stdin);
    ll a, b, k;
    sscanf(buf, "%d %d %d\n", &a, &b, &k);

    //double res = log() / log((double)k);
    int counter = 0;
    while(!(a >= b)){
        a *= k;
        counter += 1;
    }
    printf("%d\n", counter);

    return 0;
}
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
    sscanf(buf, "%d\n", &n);
    return 0;
}
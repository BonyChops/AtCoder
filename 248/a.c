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
    int ns[10];
    for (int i = 0; i < 10; i++)
    {
        ns[i] = 0;
    }
    for (int i = 0; i < 10; i++)
    {
        ns[(int)buf[i] - '0'] = 1;
    }
    for (int i = 0; i < 10; i++)
    {
        if(ns[i] == 0){
            printf("%d\n", i);
            return 0;
        }
    }
    
    
    return 0;
}
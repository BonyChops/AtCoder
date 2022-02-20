#include <stdio.h>
#include <string.h>

typedef long long ll;

void swapc(char *a, char *b){
    char c = *a;
    *a = *b;
    *b = c;
}

int main(void){
    int n;
    char buf[4000000];
    char s[4000000];
    fgets(buf, sizeof(buf), stdin);
    sscanf(buf, "%s\n", &s);
    fgets(buf, sizeof(buf), stdin);
    int a ,b;
    sscanf(buf, "%d %d\n", &a, &b);
    swapc(&s[a - 1], &s[b - 1]);
    printf("%s", s);
    return 0;
}
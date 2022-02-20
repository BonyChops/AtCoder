#include <stdbool.h>
#include <stdio.h>
#include <string.h>

typedef long long ll;

void res(bool ch[], int n) {
    for (int i = 0; i < n; i++) {
        ch[i] = false;
    }
}

int main(void) {
    int n;
    char buf[8000000];
    fgets(buf, sizeof(buf), stdin);
    sscanf(buf, "%d\n", &n);
    int counter = 0;
    int ch[n];
    for (int i = 0; i < n; i++) {
        ch[i] = 0;
    }

    fgets(buf, sizeof(buf), stdin);
    for (int i = 0; i < 4 * n - 1; i++) {
        char *s;
        int num;
        s = strtok(i == 0 ? buf : NULL, " ");
        sscanf(s, "%d", &num);
        ch[num - 1] += 1;
    }
    for (int i = 0; i < n; i++) {
        if (ch[i] < 4) {
            printf("%d\n", i + 1);
            return 0;
        }
    }

    return 0;
}
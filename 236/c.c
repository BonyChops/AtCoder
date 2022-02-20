#include <stdbool.h>
#include <stdio.h>
#include <string.h>

typedef long long ll;

typedef struct
{
    bool st;
    char s[11];
} O;

char buf[800000000];
int main(void) {
    int n, m;
    fgets(buf, sizeof(buf), stdin);
    sscanf(buf, "%d %d\n", &n, &m);
    O o[n];

    fgets(buf, sizeof(buf), stdin);
    for (int i = 0; i < n; i++) {
        char *s = strtok(i == 0 ? buf : NULL, " ");
        strcpy(o[i].s, s);
        o[i].st = false;
    }
    o[0].st = true;
    o[n - 1].st = true;

    fgets(buf, sizeof(buf), stdin);
    for (int i = 0; i < m; i++) {
        char *s = strtok(i == 0 ? buf : NULL, " ");
        bool d = false;
        for (int j = 0; j < n; j++) {
            if (strcmp(o[j].s, s) == 0) {
                o[j].st = true;
                break;
            }
        }
    }

    for (int i = 0; i < n; i++) {
        printf("%s\n", o[i].st ? "Yes" : "No");
    }

    return 0;
}
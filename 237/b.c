#include <stdio.h>
#include <string.h>

typedef long long ll;

int main(void) {
    int h, w;
    char buf[8000000];
    fgets(buf, sizeof(buf), stdin);
    sscanf(buf, "%d %d\n", &h, &w);
    int map[h][w];
    for (int i = 0; i < h; i++) {
        char p[10000];
        fgets(buf, sizeof(buf), stdin);
        sscanf(buf, "%s", p);
        char *t;
        for (int j = 0; j < w; j++) {
            t = strtok(j == 0 ? buf : NULL, " ");
            sscanf(t, "%d", &map[i][j]);
        }
    }
    for (int i = 0; i < w; i++) {
        for (int j = 0; j < h; j++) {
            printf(j >= h - 1 ? "%d" : "%d ", map[j][i]);
        }
        puts("");
    }

    return 0;
}
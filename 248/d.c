#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <stdbool.h>
#include <math.h>

typedef long long ll;

char buf[8000000];

typedef struct 
{
    int num;
    int l;
    int r;
} Q;
int piv = 0;

int main(void)
{
    int n;
    fgets(buf, sizeof(buf), stdin);
    sscanf(buf, "%d\n", &n);
    fgets(buf, sizeof(buf), stdin);
    int b[200000];
    int as[n];
    for (int i = 0; i < n; i++)
    {
        char *s = strtok(i == 0 ? buf : NULL, " ");
        sscanf(s, "%d", &as[i]);
    }
    fgets(buf, sizeof(buf), stdin);
    int q;
    Q bufq[200000];
    sscanf(buf, "%d\n", &q);
    for (int i = 0; i < q; i++)
    {
        fgets(buf, sizeof(buf), stdin);
        int l, r, x;
        sscanf(buf, "%d %d %d", &l, &r, &x);
        int t = 0;
        for (int i = l - 1; i <= r - 1; i++)
        {
            if (as[i] == x)
            {
                t += 1;
            }
        }
        int tar = piv++;
        bufq[tar].num = t;
        bufq[tar].l = l;
        bufq[tar].r = r;

        printf("%d\n", t);
    }

    return 0;
}
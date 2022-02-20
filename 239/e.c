#include <stdbool.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

typedef long long ll;

typedef struct
{
    ll np[11000];
    ll npSize;
    ll x;
    ll maxs[11000];
    bool maxCalced;
} P;

int cmpfunc(const void *a, const void *b) {
    return (*(int *)a - *(int *)b);
}

ll check(P p[], int size, int t, int n) {
    printf("Go for: %d\n", t);
    P *tp = &p[t];
    if (tp->npSize <= 0) {
        tp->maxs[0] = t;
        tp->maxCalced = true;
        return tp->x;
    }
    int c = 0;
    for (int i = 0; i < tp->npSize; i++) {
        if (!p[tp->np[i]].maxCalced) {
            check(p, size, tp->np[i], 0);
        }
        for (int j = 0; j < p[tp->np[i]].npSize + 1; j++) {
            tp->maxs[++c] = p[tp->np[i]].maxs[j];
        }
    }
    qsort(tp->maxs, c, sizeof(ll), cmpfunc);
    return tp->maxs[n];
}

int main(void) {
    ll n, q;
    char buf[4000000];
    fgets(buf, sizeof(buf), stdin);
    sscanf(buf, "%lld %lld\n", &n, &q);
    P p[n];
    fgets(buf, sizeof(buf), stdin);
    for (int i = 0; i < n; i++) {
        char *s;
        ll x;
        s = strtok(i == 0 ? buf : NULL, " ");
        sscanf(s, "%lld", &x);
        P *tp = &p[i];
        tp->x = x;
        tp->npSize = 0;
        tp->maxCalced = false;
    }
    for (int i = 0; i < n - 1; i++) {
        fgets(buf, sizeof(buf), stdin);
        ll a, b;
        sscanf(buf, "%lld %lld", &a, &b);
        printf("ikiri: %d\n", p[a - 1].npSize++);
        p[a - 1].np[++p[a - 1].npSize] = b - 1;
    }

    for (int i = 0; i < q; i++) {
        fgets(buf, sizeof(buf), stdin);
        int v, k;
        sscanf(buf, "%d %d", &v, &k);
        check(p, n, v - 1, k - 1);
    }

    return 0;
}
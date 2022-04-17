#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <stdbool.h>
#include <math.h>

typedef long long ll;

ll minl(ll a, ll b)
{
    return a > b ? b : a;
}

ll res(ll n, ll m, ll k, ll pt, ll pi)
{
    if (pt >= k)
    {
        return 0;
    }
    ll t = 0;

    if (n == 1)
    {
        // printf("[%d][%d]\n", m, k - pt);
        return minl(m, k - pt);
    }

    for (ll i = 1; i <= minl(m, k - pt); i++)
    {

        t += res(n - 1, m, k, pt + i, i);
        if (t >= 998244353)
        {
            t %= 998244353;
        }
    }
    return t;
}

int main(void)
{
    char buf[8000000];
    ll n, m, k;
    fgets(buf, sizeof(buf), stdin);
    sscanf(buf, "%lld %lld %lld\n", &n, &m, &k);
    ll total = 0, t = 0;

    total = res(n, m, k, 0, 0);
    printf("%d\n", total);

    return 0;
}
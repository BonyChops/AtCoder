#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(){
    srand(time(NULL));
    for (int i = 0; i < 20; i++)
    {
        printf("%d\n", (rand() % 20) + 1);
    }

}
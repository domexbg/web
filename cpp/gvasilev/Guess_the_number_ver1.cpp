/* rand example: guess the number */
#include <stdio.h>      /* printf, scanf, puts, NULL */
#include <stdlib.h>     /* srand, rand */
#include <time.h>       /* time */
#include<iostream>

using namespace std;
int main ()
{
    int iSecret, iGuess,i=0, points=100;

    /* initialize random seed: */
    srand (time(NULL));

    /* generate secret number between 1 and 10: */
    iSecret = rand() % 100 + 1;

    while (iSecret!=iGuess)
    {
        printf ("Guess the number (1 to 100): ");
        scanf ("%d",&iGuess);
        if (iSecret<iGuess) puts ("The secret number is lower");
        else if (iSecret>iGuess) puts ("The secret number is higher");
        i++;
        points-=10;
        if (i==10)
            break;
    }
    if (i==10)
    {

        puts("You lose!");
        printf("The number is: %d" ,iSecret);

    }

    else
        puts ("Congratulations!");
        printf("Your points are: %d", points);

    return 0;
}

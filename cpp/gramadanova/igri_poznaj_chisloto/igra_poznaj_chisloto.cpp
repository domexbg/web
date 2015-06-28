/* rand example: guess the number */
#include <stdio.h>      /* printf, scanf, puts, NULL */
#include <stdlib.h>     /* srand, rand */
#include <time.h>       /* time */
#include <iostream>

using namespace std;
int main ()
{
    int iSecret, iGuess,i;

    /* initialize random seed: */
    srand (time(NULL));



    /* generate secret number between 1 and 10: */
    iSecret = rand() % 100 + 1;
    i=0;

    do
    {

        printf ("Guess the number (1 to 100): ");
        scanf ("%d",&iGuess);
        if (iSecret<iGuess) puts ("The secret number is lower");
        else if (iSecret>iGuess) puts ("The secret number is higher");
        i++;
        if(i==5)
            break;
    }
    while (iSecret!=iGuess);
    if (i==5)
        {puts("You lose!");
        printf ("%i", iSecret);
        }
    else
        puts ("Congratulations!");
    return 0;
}

#include <stdio.h> /* fprintf() */
#include <stdlib.h> /* rand() srand() NULL */
#include <time.h> /* time() */

#define MAX_TRY 10

int check_digits( char s[] ) {
	int res;
	 /* Code here*/
	return res;
}

int main() {
    int r_number;
    char guess[20] = "";
    int i, res, guess_num;

    srand( time(NULL) );
  
    for (i = 0; i < MAX_TRY; i++) {
        r_number = rand() % 100 + 1;
		do  {
		  puts("Make a guess:");	
		  res = fscanf(stdin, "%s", &guess);
		  if ( check_digits(guess) ) {
		    guess_num = atoi(guess);
			break;	
		  }
        } while ( 1 ); /* cin >> guess; */
        fprintf(stdout, "FSCANF: %d\n", res);
		if ( r_number > guess_num ) 
	      fprintf(stdout, "%s", (i == MAX_TRY-1)?"":"Go up!\n");
        else if ( r_number < guess_num ) 
		       fprintf(stdout, "%s", (i == MAX_TRY-1)? "" :"Go down!\n");
             else {
               fprintf(stdout, 
                       "Congratulations! You win. [%d]. Points: %d", 
                       r_number, 100 - (i*10));
               break;;;;;;;;;;;;;;;
             }
    }
    if ( r_number != guess_num ) fprintf(stdout, "You lost! The number was %d.\n", 
	r_number);
     return EXIT_SUCCESS; /* stdlib.h */
}

#include <stdio.h>
#include <assert.h>
#include <stdlib.h>
#include <string.h>

#define W_MAX 100

/*
  This function will reverse the letters of a word

  INFO: 
  http://programming-bg.com/%D1%83%D1%80%D0%BE%D1%86%D0%B8/C++/%D0%BD%D0%B8%D0%B7%D0%BE%D0%B2%D0%B5
  
  Example:
  Hello => olleH
*/

char *rev_w(const char *w)
{
					 /* Write your code here */
					// hints: char*, char [], static, \0
	static char rev_word[70];
	
	int i = 0, p = 0;
		// Loop through the word
		for (i = 0, p = strlen(w) - 1; i < strlen(w) && p >= 0; i++, p--)
		{
			// Insert the chars into rev_word last to first
			rev_word[i] = w[p];
		
			// Insert \0 in the end of rev_word
			rev_word[strlen(w)] = '\0';
		}
	// Return rev_word
	return rev_word;
}

int main(int argc, char** argv) 
{
	int i;
	const char *words_in[] = {"hello", "Village", "GitHub", "elephant", "wow", "k", ""};
	const char *words_out[] = {"olleh", "egalliV", "buHtiG", "tnahpele", "wow", "k", ""};
	
	for (i = 0; i < sizeof(words_in)/sizeof(words_in[0]); i++)
	{
 		fprintf(stdout, "---\n%s %s %s\n", words_in[i], words_out[i], rev_w(words_in[i]));
 		fprintf(stdout, "Test %d: ", i+1);
		assert( strcmp(rev_w(words_in[i]),  words_out[i]) == 0 );
		fprintf(stdout, "OK\n");
	}
	
	return 0;
}

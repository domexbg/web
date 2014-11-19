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

Steps

w[] = "hello"
res[100]=""

i = 4
p = 0

1) w[i] == 'o' ==> w[4] == 'o'
res[p] <---- 'o' ==> res[0] <--- 'o'
res == "o"

2)i = 3
p = 1

w[3] == 'l'
res[1] <---- 'l'
res == "ol"

3) i=2
p = 2
w[2] == 'l'
res[2] <--- 'l'
res == "oll"

4) i = 1
p = 3
w[1] == 'e'
res[3] <---- 'e'
res == "olle" 

5) i = 0
p = 4
w[0] == 'h'
res[4] <---- 'h'
res == "olleh"

6) i = -1 ==> i >= 0 ==> FALSE

res == "olleh"



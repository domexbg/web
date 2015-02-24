#include <stdio.h>
#include <assert.h>
#include <stdlib.h>
#include <string.h>



int main(int argc, char** argv) 
{
	int i;
	char s1[] = "Goodbye!";
	char *p = s1;
	
	fprintf(stdout, "%d\n", argc);
	
	for (i=0; i<argc; i++)	
	  fprintf(stdout, "%s ", argv[i]);
	
	fprintf(stdout, "\n%s\n", s1);
	*(p + 2) = '#';
	*(p++) = '$';
	fprintf(stdout, "\n%s\n", s1);
	fprintf(stdout, "\n%s\n", p);
	  
	return 0;
	
}

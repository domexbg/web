#include <stdio.h>
#include <iostream>
#include <assert.h>
#include <stdlib.h>
#include <string.h>


int main(int argc, char** argv) 
{

     char s1[]= "Hello, Mel. Today is sunday. Let's go party!";
fprintf (stdout,"%s -> %d/n",s1,strlen(s1) );

	
	return 0;
}


#include <stdio.h>
#include <iostream>
#include <assert.h>
#include <stdlib.h>
#include <string.h>


int main(int argc, char** argv) 
{

     char s1[]= "Hello, Mel. Today is sunday. Let's go party!";

	strcat(s1, "Melaniya!");
fprintf (stdout,"%s -> %d/n",s1,strlen(s1) );
	return 0;
}


strcmp("Hello", "Hello") = 0
strcmp(s1, "Hello") = 1
strcmp("Hello", s1) = -1

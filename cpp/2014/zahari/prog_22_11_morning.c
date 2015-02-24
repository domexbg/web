#include <stdio.h>
#include <assert.h>
#include <stdlib.h>
#include <string.h>


int main(int argc, char** argv) 
{
	char s1[20];
	char s2[] = " Zahari!";
	s1[0] = 'H';
	s1[1] = 'e';
	s1[2] = 'l';
	s1[3] = 'l';
	s1[4] = 'o';
	s1[5] = '\0';
	
	strcat(s1, s2);
	
	//if ( !strcmp("Hello", "Hello") ) 
	fprintf( stdout, "strcmp -> %d\n", !strcmp("HellO", "Hello") );
	fprintf( stdout, "strchr -> %c\n", strchr("HellO", 'H') );
	fprintf( stdout, "strlen('%s') -> %d\n", s1, strlen(s1) );
		
	return 0;
}


#include <iostream>
#include <stdio.h>
#include <assert.h>
#include <stdlib.h>
#include <string.h>


    int main(int argc, char** argv) 


   {
   
 	char s1[] = "Hello how are you!";
	 s1[19] ='\0';
	 fprintf( stdout, "%s-> %d\n", s1,strlen(s1) );	
	
	
	return 0;
}

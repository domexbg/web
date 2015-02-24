#include <iostream>
#include <stdio.h>
#include <assert.h>
#include <stdlib.h>

       using namespace std;
         
         int main () 
		 {
             FILE *f = fopen("out.txt", "w");
             fprintf (f, "Hello!\n");
             fclose(f);
		 
		 
		 
		 
		 }

#include <iostream>
#include <stdio.h>
#include <assert.h>
#include <stdlib.h>

       using namespace std;
         
         int main ()
   {
   
   
     float arr_f[50];
     int i;
      for (i=0; i<3;i++)
      { 
	   fprintf(stdout, "Enter a Number:");
	      fscanf(stdin,"%f", &arr_f[i]);
      }
    
	  float max =arr_f[0];
	  for (i=0; i<3; i++)
	  {
	  	if (max< arr_f[i] )max= arr_f[i];
	  	
	  }
	    fprintf(stdout, "max=%f", max);
	     fscanf(stdin,"%f", &arr_f[i]);
	
	     return 0;
   
   }

#include <stdio.h>
#include <assert.h>
#include <stdlib.h>

/*
  This function will find the biggest of three integers
*/

int max3(int a, int b, int c)
{
	/* Write your code here*/
 

if (a>=b);
else a=b;
if (a>=c);
else a=c;
return a;





}

int main(int argc, char** argv) 
{
	int i = 1;
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max3(0, 0, 0) == 0);
	fprintf(stdout, "OK\n");
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max3(0, 1, 0) == 1);
	fprintf(stdout, "OK\n");
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max3(100, -1, 10) == 100);
	fprintf(stdout, "OK\n");
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max3(-40, -5, -1) == -1);
	fprintf(stdout, "OK\n");
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max3(60, -100, 70) == 70);
	fprintf(stdout, "OK\n");
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max3(0, 9, 9) == 9);
	fprintf(stdout, "OK\n");
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max3(-139, -139, -139) == -139);
	fprintf(stdout, "OK\n");
	
	return 0;
}

#include <stdio.h>
#include <assert.h>
#include <stdlib.h>

/*
  This function will find the biggest of two integers
*/

int max2(int a, int b)
{
  if (a>b) 
  return a;
  else return b;

}

int main() 
{
	int i = 1;
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max2(0, 0) == 0);
	fprintf(stdout, "OK\n");
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max2(1, 0) == 1);
	fprintf(stdout, "OK\n");
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max2(-1, 10) == 10);
	fprintf(stdout, "OK\n");
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max2(-5, -1) == -1);
	fprintf(stdout, "OK\n");
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max2(-100, 0) == 0);
	fprintf(stdout, "OK\n");
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max2(9, 9) == 9);
	fprintf(stdout, "OK\n");
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max2(-139, -139) == -139);
	fprintf(stdout, "OK\n");
	
	return 0;
}

#include <stdio.h>
#include <iostream>
#include <math.h>
#include <assert.h>
#include <stdlib.h>


int max2(int a, int b) 

{
if (a > b) {
	return a;
}
return b;

}
int main() 
{
	int i = 1;
	
	fprintf(stdout, "Test %d: ", i++); /* izwavda chislo i go sybitra s 1 */
	assert( max2(0, 0) == 0);  /* bydi siguren, podsigurqwane, che funkcion is correct */
	fprintf(stdout, "OK\n");  /*  */
	
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


#include <stdio.h>
#include <assert.h>
#include <stdlib.h>
#include <iostream>
using namespace std;

/*
  This function will find the biggest of two integers
*/

int max2(int a, int b)
{
	/* Write your code here*/
	if (a>b){
		return a;
	}
	else{
		return b;
	}

	}

int main() 
{
	int i = 1;
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max2(0, 0) == 0);
	fprintf(stdout, "OK\n");
	cout << "The biggest from 0 0 is " <<max2(0, 0)<< endl;
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max2(1, 0) == 1);
	fprintf(stdout, "OK\n");
	cout << "The biggest from 1 0 is " << max2(1, 0)<< endl;
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max2(-1, 10) == 10);
	fprintf(stdout, "OK\n");
	cout << "The biggest from -1 10 is " << max2(-1, 10)<< endl;
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max2(-5, -1) == -1);
	fprintf(stdout, "OK\n");
	cout << "The biggest from -5 -1 is " << max2(-5, -1)<< endl;
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max2(-100, 0) == 0);
	fprintf(stdout, "OK\n");
	cout << "The biggest from -100 0 is " << max2(-100, 0)<< endl;
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max2(9, 9) == 9);
	fprintf(stdout, "OK\n");
	cout << "The biggest from 9 9 is " << max2(9, 9)<< endl;
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max2(-139, -139) == -139);
	fprintf(stdout, "OK\n");
	cout << "The biggest from -139 -139 is " << max2(-139, -139)<< endl;
	
	return 0;
}

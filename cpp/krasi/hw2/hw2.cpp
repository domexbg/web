#include <stdio.h>
#include <assert.h>
#include <stdlib.h>
#include <iostream>
using namespace std;

/*
  This function will find the biggest of three integers
*/

int max3(int a, int b, int c)
{
	/* Write your code here*/
	if (a>b) if (a<c) return a;
	else return c;
	else if (b>c) return b;
	else return c;
	
}

int main(int argc, char** argv) 
{
	int i = 1;
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max3(0, 0, 0) == 0);
	fprintf(stdout, "OK\n");
	cout << "The biggest from 0 0 0 is " <<max3(0, 0, 0)<< endl;
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max3(0, 1, 0) == 1);
	fprintf(stdout, "OK\n");
	cout << "The biggest from 0 1 0 is " <<max3(0, 1, 0)<< endl;
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max3(100, -1, 10) == 100);
	fprintf(stdout, "OK\n");
	cout << "The biggest from 100 -1 10 is " <<max3(100, -1, 10)<< endl;
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max3(-40, -5, -1) == -1);
	fprintf(stdout, "OK\n");
	cout << "The biggest from -40 -5 -1 is " <<max3(-40, -5, -1)<< endl;
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max3(60, -100, 70) == 70);
	fprintf(stdout, "OK\n");
	cout << "The biggest from 60 -100 70 is " <<max3(60, -100, 70)<< endl;
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max3(0, 9, 9) == 9);
	fprintf(stdout, "OK\n");
	cout << "The biggest from 0 9 9 is " <<max3(0, 9, 9)<< endl;
	
	fprintf(stdout, "Test %d: ", i++);
	assert( max3(-139, -139, -139) == -139);
	fprintf(stdout, "OK\n");
	cout << "The biggest from -139 -139 -139 is " <<max3(-139, -139, -139)<< endl;
	
	return 0;
}

#include <stdio.h>
#include <assert.h>
#include <stdlib.h>
#include <iostream>
/*
This function will find the biggest of three integers
*/
int max3(int a, int b, int c)
{
int x;
if(a>=b)
x=a;
else x=b;
if(b>=c)
x=b;
else x=c;
return 0;/* Write your code here*/
}
int main(int argc, char** argv)
{
int i = 1;
fprintf(stdout, "Test %d: ", i++);
assert( max3(0, 0, 0) == 0);
fprintf(stdout, "OK\n");
fprintf(stdout, "Test %d: ", i++);
assert( max3(0, 1, 0) == 0);
fprintf(stdout, "OK\n");
fprintf(stdout, "Test %d: ", i++);
assert( max3(100, -1, 10) == 0);
fprintf(stdout, "OK\n");
fprintf(stdout, "Test %d: ", i++);
assert( max3(-40, -5, -1) == 0);
fprintf(stdout, "OK\n");
fprintf(stdout, "Test %d: ", i++);
assert( max3(60, -100, 70) == 0);
fprintf(stdout, "OK\n");
fprintf(stdout, "Test %d: ", i++);
assert( max3(0, 9, 9) == 0);
fprintf(stdout, "OK\n");
fprintf(stdout, "Test %d: ", i++);
assert( max3(-139, -139, -139) == 0);
fprintf(stdout, "OK\n");
return 0;
}

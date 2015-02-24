#include <stdio.h>
#include <assert.h>
#include <stdlib.h>
#include <string.h>

int main(int argc, char** argv) 
{
	int i;
	int p;
	char q[20];
	FILE *fin;
	fin = fopen("input.txt", "r");
	
	if (!fin) {fprintf(stdout, "Cannot locate file!\n"); return -1;}
	while (fscanf(fin , "%s", &q)==1)
	{
		
 	fprintf( stdout, "%s\n", q );
 		
	}
	fclose(fin);
	return 0;
}

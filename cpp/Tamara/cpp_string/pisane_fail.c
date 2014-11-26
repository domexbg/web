#include <stdio.h>
#include <assert.h>
#include <stdlib.h>
#include <string.h>

int main(int argc, char** argv) 
{
	int i;
	FILE *fout;
	fout = fopen("output.txt", "w");
	
	if (!fout) {fprintf(stdout, "Cannot create file!\n"); return -1;}
	for (i = 0; i < 100; i = i+2)
	{
 		fprintf(fout, " %d\n", i);
 		
	}
	fclose(fout);
	return 0;
}

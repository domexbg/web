#include <stdio.h>
#include <assert.h>
#include <stdlib.h>
#include <string.h>

int main(int argc, char** argv) 
{
	int i;
	int sum = 0;
	int add = 0;
	FILE *fout;
	fout = fopen("output.txt", "w");
	
	if (!fout) {fprintf(stdout, "Cannot create file!\n"); return -1;}
	for (i = 0; i < 100; i++)
	{
		if(i>0 && i%2 == 0)
        {
            sum += i;        
            add ++;
		}
	fclose(fout);
	return 0;
}
}

#include <stdio.h>
#include <string.h>
int main()
{	
	int i;
		
		char s1[10]="Rayko!!";
	
		
	fprintf(stdout,"%d\n",strlen (s1));
	fprintf(stdout,"%s\n",s1);
	for(i=7;i>=0;i--)
	{
		
		fprintf(stdout,"%c ",s1[i]);
	}
	return 0;
}

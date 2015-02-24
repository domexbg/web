#include <stdio.h>

int main()
{
	int georgi = 4;
	
	fprintf(stdout, "%d\n", !(georgi > 30 && georgi < 40) );
	
	if ( georgi > 30 ) fprintf(stdout, "Variable georgi bigger than 30\n");
	else fprintf(stdout, "Variable georgi less or equal than 30");
	
	return 0;
}

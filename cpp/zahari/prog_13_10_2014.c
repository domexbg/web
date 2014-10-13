#include <stdio.h>
#include <string.h>

int main()
{
	int a[] = {9875, 857, 864, 3654, 643, 353, 763, 64, 47, 46};
	int i;
	
	a[0] = -10;
	a[6] = 2;
	/*loops цикли*/
	
	char s1[] = "Hello";
	s1[3] = '!';
	s1[2] = '!';
	s1[4] = '\0';
	
	
	fprintf( stdout, "%d\n", sizeof(a)/sizeof(a[0]) );
	fprintf( stdout, "%s\n", s1 );
	
	for ( i = 0; i < sizeof(a)/sizeof(a[0]); i++)
	{
		//a[i] = i;
		fprintf(stdout, "a[%d] = %d\n", i, a[i]);
	}
	
	return 0;
}

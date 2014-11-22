#include <stdio.h>
#include <assert.h>
#include <stdlib.h>

char *dec2bin( const int n ) {
	unsigned int mask = 0x8000000;
	static char res[100] = "";
	int i = 0;
	int flag = 0;
	
	while ( mask ) {
		flag |= (n & mask);
		if ( flag ) {
		    res[i] = (n & mask) ? '1' : '0';
		    i++;
	   }
	   mask >>= 1;
	}
	res[i] = '\0';
	
	return res;
}

int main() 
{
	int x;
	
	x = 0xF8 | 0xF4;
	fprintf(stdout, "0x%X\n0b%s\n", x, dec2bin(x) );
	
	return 0;
}


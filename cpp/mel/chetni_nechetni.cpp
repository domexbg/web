#include <iostream>
#include <math.h>

using namespace std;

int main()

{
int br=0;a;br=2; /* br2 - ako tyrsim  Nechettni */
for (int i=1;i<=10;i++) /*i<=n, ako ne znaem ot kolko chisla*/
{ cin >>a;
if(a%2==0) br++; /* chettni wadi*/
if(a%2==1) br2++ /* Nechettni wadi*/
}
	cout<<br<<" "<< br2<< endl;
	return 0;
 }

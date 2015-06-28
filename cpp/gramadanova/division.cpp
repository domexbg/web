
#include <iostream>
#include <cmath>
using namespace std;

int main()

{
    long a=67893,j,b,c;


    for ( int i=4; i>0;i--)

    {
        j=10000;
        b=a/j;
        c=b%10;
        j=j/10;
        cout<<j <<" "<<b<<" "<<c<<" "<<endl;
        cout<<c<<endl;

        if (i==1)
        cout<<a%10<<endl;

    }


    return 0;
}





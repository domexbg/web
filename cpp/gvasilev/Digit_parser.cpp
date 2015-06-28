#include <iostream>
using namespace std;
int main()
{
    int a=67893,b,c;
    for (int i=4; i>0; i--)
    {
         b=(a/10)^i;
         c=a%b

        cout<<b<<endl;

    }

        return 0;
    }

#include <iostream>
#include <stdlib.h>
#include <time.h>
using namespace std;
int main()
{
	int x;
	int n;
	int cnt;
	srand (time(NULL));
    x = 1 + rand()%100;
    
	cout<<"Poznai chisloto"<<endl<<endl;
    cnt=0;	
    while(cnt<5)
    
    {    cout<<"Dai svoeto predlojenie:";
        cin >> n;
        if(x > x)
            cout<<"Tvarde Golqmo Chislo!"<<endl;
        else
        if (x< x)
            cout<<"Tvarde Malko Chislo!"<< endl; 
        else    
        	 cout<<"Razpolagash s broi tochki:"<< 100-(cnt+1)*20 <<endl;
        	 
             cout <<"Bravo ti pozna chisloto!!!"<< endl;
             break;
       }
          cnt++;   
    
        if (cnt==5)
             cout<<"no more check";
             
return 0;
}

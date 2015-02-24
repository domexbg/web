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
        if(x > x) // <==== you have to compare X and N
            cout<<"Tvarde Golqmo Chislo!"<<endl;
        else
        if (x< x) // <==== you have to compare X and N
            cout<<"Tvarde Malko Chislo!"<< endl; 
        else    // The three lines below have to be in curly brakets so they execute all in the 
                //ELSE clause
        	 cout<<"Razpolagash s broi tochki:"<< 100-(cnt+1)*20 <<endl;
        	 
             cout <<"Bravo ti pozna chisloto!!!"<< endl;
             break;
       }
          cnt++; // <====== counter must be in the WHILE loop body not outside 
    
        if (cnt==5)
             cout<<"no more check";
             
return 0;
}

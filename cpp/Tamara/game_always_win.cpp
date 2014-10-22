#include <iostream>
#include <stdlib.h>
#include <time.h>
using namespace std;
int main()
{
 int x;
 int n;
 int cnt;
 cout <<time(NULL)<<endl;
 srand (time(NULL));
 x = 1 + rand()%100;

 cout<<"Poznai chisloto"<<endl<<endl;
 cnt=0;
 while(cnt<5)
 {
 	cout<<"Dai svoeto predlojenie:";
 	cin >> n;
 	cout<<"Razpolagash s broi tochki:"<< 100-(cnt)*20 <<endl;

 	cout <<"Bravo ti pozna chisloto!!!"<< endl;
 	break;
 	if(n > x)
 		cout<<"Nadolu!"<< endl <<endl;
 	else
 	if(n< x)
 		cout<<"Nagore!"<< endl <<endl;
 	else
 		{
 			cout<<"Razpolagash s broi tochki:"<< 100-(cnt+1)*20 <<endl;

 			cout <<"Bravo ti pozna chisloto!!!"<< endl;
 			break;
 		}
 		cnt++;
 }
 	if (cnt==5)
 	cout<<"You loose";

return x;
}

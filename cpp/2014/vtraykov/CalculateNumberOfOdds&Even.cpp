#include<stdio.h>
#include <iostream>
using namespace std;
int main()
{
int a[10],i,value,od1=0,ev1=0;
printf("The program shows the number of odds and evens out of entered\nEnter 10 numbers pressing enter after each\n");
for(i=0;i<10;i++)
{
scanf("%d",&value);
a[i]=value;
}
for(i=0;i<10;i++)
{
if(a[i]%2==0)
{
ev1++;
}
else if (a[i]%2==1)
{
od1++;
}
}
printf("The number of odds entered are: %d\n",od1);
printf("The number of evens entered are: %d\n",ev1);
system("pause");
return 0;
}


#include<stdio.h>
#include <iostream>
using namespace std;
int main()
{
int a[10],i,value;
printf("The program shows the numbers smaller than 7 out of 10 entered\n Enter 10 numbers pressing enter after each\n");
for(i=0;i<10;i++)
{
scanf("%d",&value);
a[i]=value;
}
printf("The numbers smaller than 7 are\n");
for(i=0;i<10;i++)
{
if(a[i]<7)
{
printf("%d \n",a[i]);
}
}
system("pause");
return 0;
}

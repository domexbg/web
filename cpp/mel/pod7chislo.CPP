#include<stdio.h>
#include <iostream>
using namespace std;
int main()
{
int a[10],i,m;
printf("Add value\n");
for(i=0;i<10;i++)
{
scanf("%d",&m);
a[i]=m;
}
printf("smaller than 7\n");
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

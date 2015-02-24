	#include<iostream>
	#include<math.h>
	using namespace std;

	int main()
	{
	int i, sum;
	sum = 0;
	i = 1;
	do 
	{
		sum = sum + i;
		i++;
	} while (i <= 100);
	cout << "The sum from 1 to 100 = " << sum;
	cin.get();
  return 0;
}

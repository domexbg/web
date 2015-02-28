#include <iostream>
using namespace std;

int main ()
{
	// Input 10 numbers into an array
	int arr[5];
	int i;
	for (i=0; i<5; i++)
	{
		cout << "Enter number: ";
		cin >> arr[i];
	}
	//Check the array for negative numbers and report
	int counter = 0;
	int x = 0;
	for (x = 0; x < 5; x++)
	{
		if (arr[x] < 0)
		counter++;
	}
	cout << "The array contains " << counter << " negative number(s).";		
	return 0;
}

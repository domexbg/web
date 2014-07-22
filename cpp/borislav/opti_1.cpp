// You should rename your file to have CPP extension
// Structure your file better and use 4 spaces instead of 1 tab
#include <iostream>

using namespace std;
int main() {

int mas[11][10];
int d;
cout << "Vuvedete broi na chislata=";
cin >> d;

for (int i=0;i<d;i++){
        // Cannot use index "11" as you have declared indexes from 
        // 0 to 10
	cin >>	mas[10][i] ;
}
	// Error -- you should not increase "d" as your
	// counter is "i"
	for (int i=0 ; i<d ; i++){
		for (int j=0 ; j<10; j++){
	        
		// Cannot use index "11" you sould either
		// redeclar the array "mas[10][12]" or use smaller index
		if (mas[10][j]<10-j) mas[i][j]=1;
		else
		mas[i][j]=0;
	}
	}
	 for (int i=0 ; i<10 ; i++){
		for (int j=0 ; j<d; j++)
		// Error "=" means assignment not comparison 
		// here you obviously want "=="
		if (mas[i][j]==1) 
		cout << "*";
}
	return 0;
}

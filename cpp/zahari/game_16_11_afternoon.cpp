#include <iostream>
#include <cstdlib>
#include <ctime>
#include <string>

using namespace std;

int check_dig( string duma )
{
	int cnt = 0;
	
	for (cnt = 0; cnt < duma.size(); cnt+=1) {
		//        FALSE              TRUE
		if ( duma[cnt]  < '0' || duma[cnt] > '9' )
		  return 0; // FALSE
	}
	return 1; // TRUE
}

int main( int argc, char **argv) {
	int i = 0;
	int rand_num; // Tova ni e sluchainoto chislo
	int ans_num; // Chilosto koeto nie predpolagame
	string ans;
	ans = "12345";
	
	//ans[3] = '$';
	
	//cout << check_dig(ans) << endl << ans.size();
	//return 0;
	
	srand( time(NULL) );
	/* 
	cout << time(NULL) << "\n";
	*/ // off by one 
	rand_num = rand() % 100 + 1;
	
	for (i = 0; i < 10; i+=1) {
		do {
		  cout << "Please input number: ";
	      cin >> ans;
	    } while ( check_dig(ans) == 0 );
		//rand_num = ans_num;
		if ( i == 9 ) {
			cout << "Game over! Looser. " << rand_num;
		}
		else if ( ans_num == rand_num ) {
			cout << "Bravo! You win. " << rand_num << "\n";
			break;
		} 
		else if ( ans_num < rand_num )  {
			cout << "Go up\n";
		} else if ( ans_num > rand_num ) {
			cout << "Go down\n";
		} 
	}
	
	return EXIT_SUCCESS;
}

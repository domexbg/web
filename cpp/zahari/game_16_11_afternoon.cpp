#include <iostream>
#include <cstdlib>
#include <ctime>
#include <string>

using namespace std;

/*
@duma: string
@return: 
  0 - if @duma not a numer
  1 - if @duma is a number 
*/
int check_dig( const string duma )
{
	int cnt = 0;
	
	if ( duma.size() > 2 && duma != "100") return 0;
	 
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
		
		switch (  ans.size() ) {
		    case 1:
		    	ans_num = (ans[0] - '0');
		    	break;
	    	case 2:
			    ans_num = (ans[0] - '0') * 10 + (ans[1] - '0');
			    break;
		    case 3:
		    	ans_num = 100;
	    	default:
	    		cout << "Cannot happen!\n";
	    		return -1;
	    }
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

#include <iostream>
#include <math.h>

using namespace std;

int main()

{
int br=0;a;br=2; /* br2 - ako tyrsim  Nechettni */
for (int i=1;i<=10;i++) /*i<=n, ako ne znaem ot kolko chisla*/
{ cin >>a;
if(a%2==0) br++; /* chettni wadi*/
if(a%2==1) br2++ /* Nechettni wadi*/
}
	cout<<br<<" "<< br2<< endl;
	return 0;
 }


/*-----------------------------
За изпита Теория - 50 въпроса тест затворен с 4-тири под услошич, подобни на тези в програмата.

За изпита Практика:
1 задача SQL - да се създаде таблица в Localhost, като използшаме код "create table "
2 задача Access да се създадат 3 таблици и да се свърват - клиент, търговец, продукти
3. задача C++ да се намерят четните числа от 10 . този пример е за четни и нечетни;

*/

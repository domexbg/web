#include <iostream>
#include <cstring>
using namespace std;

class String {
	public:
		String(  const char *);
		String( const String & );
		~String();
		String &operator=( const String &);
		String &operator=( const char * );
		void swap( String & );
		friend const String operator+( const String &, const String & );
		friend bool operator<( const String &, const String & );
	private:
		String( const char *, const char * );
		char *s_;
};

String::String( const char *a, const char *b ) {
	s_ = new char[ strlen(a) + strlen(b) + 1 ];
	strcat( strcpy( s_, a ), b );
}

String::String( const char *init ) {
	if ( !init ) init = "";
	s_ = new char[ strlen(init) + 1 ];
	strcpy(s_, init);
}

String::~String() { delete [] s_; }

String &String::operator=(  const char *str){
	if ( !str ) str = "";
	char *tmp = strcpy( new char[ strlen(str) + 1 ], str );
	delete [] s_;
	s_ = tmp;
	return *this;	
}

const String operator+( const String &a, const String &b ) {
	return String( a.s_, b.s_ );
}

int main(void) {
	String s1("Hello");
	String s2("!!");
	
	//s1 = s1 + s2;
	
	return 0;
}

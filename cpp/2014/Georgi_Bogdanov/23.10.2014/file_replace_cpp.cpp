//#include <stdio.h>
//#include <assert.h>
//#include <stdlib.h>
#include <string>
#include <fstream>
#include <iostream>
using namespace std;

int main(int argc, char** argv) 
{
  std::fstream fs;
  string s1;
  
  fs.open ("input.txt",fstream::in);
  while(!fs.eof()){
   fs >> s1;
   s1.replace (0,0,35-s1.size(), '.');
  // s1.replace(0, 4, "!!");
   cout << s1 <<endl;	
  
  }

 

  fs.close();

  return 0;
}

	


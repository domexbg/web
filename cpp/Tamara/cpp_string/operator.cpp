#include <iostream>
#include <string>
using namespace std;
int main ()
{
  std::string name ("John");
  std::string family ("Smith");
  name += " K. ";         // c-string
  name += family;         // string
  //name += "\n \n \n"; 
  std::cout << name <<endl;          // character
  name.replace(3,3,"!!!!!!!!");
  std::cout << name;
  return 0;
}

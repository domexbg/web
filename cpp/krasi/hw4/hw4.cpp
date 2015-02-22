#include <iostream>
#include <string>
#include <cassert>
using namespace std;

/*
  You will have to implement a function that will use C++ string object
  in order to reverse  the letter in each word of a sentence.

  INFO:
  http://www.math.bas.bg/~nkirov/2012/WCP/STL/STL.pdf (string)
  http://anaturb.net/C/string_exapm.htm
  http://www.cprogramming.com/tutorial/string.html
  https://www.youtube.com/watch?v=2_znS5i92pM


  Example:
  I am born in a village => I ma nrob ni a egalliv
*/
string rev_sent(const string s)
{
    /* Write your code here */
    
string res = "";
string word[j]];
string revword;
string rests = s;
unsigned int i = 0;
unsigned int j = 0;
unsigned int spaces = 0;

for(i = s.find(" ", 0); i != string::npos; i = s.find(" ", i)) //count number of spaces between words
{
	spaces++;
	i++;  
}
for (j=0;j<= spaces+1;j++){

word[j] = s.erase (s.find (" ",0), s.find ("\0",0) //separate each word from the beginning
rests = rests.erase (0, strlen (word[j]+1))

for ( i = 0; i < strlen (word[j]); i++ ){ //reverse each word
revword[j][strlen (word[j])-i-1]=word[j][i];
}
revword[j][strlen (word[j])] = '\0';
res = res.append (revword[j])// append each reversed word to result
}
return res;
}

int main(int argc, char** argv)
{
  unsigned int i;
  const string sentence_in[] = {
    "We are born in this village", "", "GitHub", "I", "wow wow wow", "Miami is a big city.",
    "My favourite pie remains the standard traditional meat pie.",
    "If you want a sit down meal in one of these cafes or bakeries, then that is no problem.",
    "You can order your pie with salad and chips and it will come on a plate.",
    "A meat pie tastes just as good when eaten with a knife and fork.",
    "A visit to the local cafe or bakery is a must in any small town in country Australia, \
or indeed in any suburb of a major city.",
    "When you visit, be sure to order a meat pie, a real taste of Australia."
  };
  const string sentence_out[] = {
    "eW era nrob ni siht egalliv", "", "buHtiG", "I", "wow wow wow", "imaiM si a gib ytic.",
    "yM etiruovaf eip sniamer eht dradnats lanoitidart taem eip.",
    "fI uoy tnaw a tis nwod laem ni eno fo eseht sefac ro seirekab, neht taht si on melborp.",
    "uoY nac redro ruoy eip htiw dalas dna spihc dna ti lliw emoc no a etalp.",
    "A taem eip setsat tsuj sa doog nehw netae htiw a efink dna krof.",
    "A tisiv ot eht lacol efac ro yrekab si a tsum ni yna llams nwot ni yrtnuoc ailartsuA, \
ro deedni ni yna brubus fo a rojam ytic.",
    "nehW uoy tisiv, eb erus ot redro a taem eip, a laer etsat fo ailartsuA."
  };

  for (i = 0; i < sizeof(sentence_in)/sizeof(sentence_in[0]); i++)
  {
    cout << sentence_out[i] << endl << rev_sent(sentence_in[i]) << endl;
    cout << "Test " << i+1 << ": ";
    assert( rev_sent(sentence_in[i]) == sentence_out[i] );
    cout << "OK" << endl;
  }

  return 0;
}

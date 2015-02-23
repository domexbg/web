#include <iostream>
#include <string>
#include <cassert>
#include <stdio.h>
#include <stdlib.h>
#include <assert.h>
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
//int main ()
string rev_sent(const string s)
{    /* Write your code here */
	string word;
	string revword;
	string rests1 = s;
	string rests2 = s;
	string res = "";
	string sign = "";
	unsigned int i = 0;
	unsigned int j = 0;
	unsigned int k = 0;
	unsigned int wordnum = 1;

	for(i = 0; i < s.size(); i++) //count number of words
	{
		if (s[i] == ' ') wordnum = wordnum + 1;
	}
	
	for (j = 0;j < wordnum-1;j++)
	{
		word = rests1.erase ( rests1.find (' ',0), rests1.size () - 1 ); //separate each word w/o last from the beginning
		rests1 = rests2.erase (0, word.size ()+1);
		if (word[word.size ()-1] ==',') //separate sign after each word w/o last
		{
			sign = ',' ;
			word = word.erase(word.size ()-1,1);
		}
		revword = word;
		for ( k = 0; k < word.size () ; k++ )//reverse each word w/o last
		{ 
			revword[word.size ()-k-1]=word[k];
		}
		revword[word.size ()] = '\0';
		res = res.append (revword + sign + ' ');// append each reversed word w/o last to result
		sign = "";
	}
	if (rests1[rests1.size ()-1] =='.') //separate sign after last word
	{
		sign = '.' ;
		rests1 = rests1.erase(rests1.size ()-1,1);
	}
	revword = rests1;
	for ( k = 0; k < rests1.size () ; k++ )//reverse last word
		{ 
			revword[rests1.size ()-k-1]=rests1[k];
		}
		revword[rests1.size ()] = '\0';
	res = res.append (revword + sign);// append each reversed word to result

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

# include "BMP.h"
#include <string>
#include <fstream>
using namespace std;

 //"Password: $ecr3t"

string bmp_decode ( string fname ) {
		int x, y, i;
	unsigned char r, g, b, size;
	string msg = "";
	bitmap_image img(fname);
	
    img.get_pixel(0, 0, r, g, b);
    size = r;
    i=0;
	for (x = 1; i < size; x++) {
		for (y=1 ; i < size; y++) {
			img.get_pixel(x, y, r, g, b);
		msg += r; i++;
	
		
		}
	}
	return msg;
}


int main() {
 ofstream f;
 f.open("1.txt");
  f << bmp_decode("result.bmp");
  f.close();
  
	return 0;
}

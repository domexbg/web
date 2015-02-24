# include "BMP.h"
#include <string>
using namespace std;

 //"Password: $ecr3t"

void bmp_encode ( string fname, string msg ) {
		int x, y, i;
	unsigned char r, g, b;
	
	bitmap_image img(fname);
     img.get_pixel(0, 0, r, g, b);
	 r= msg.size();
	 img.set_pixel( 0, 0, r, g, b);
    i=0;
	for (x = 0; i < msg.size(); x++) {
		for (y=0 ; i < msg.size(); y++) {
			img.get_pixel(x, y, r, g, b);
		r = msg[i]; i++;
	
			img.set_pixel(x, y, r, g, b);
		}
	}
	img.save_image(fname);
}


int main() {

bmp_encode("result.bmp", "github.com user zahari pass: 123@@!!");
	return 0;
}

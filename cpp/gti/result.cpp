#include "GT.h"
#include <string>
#include <fstream>
using namespace std;

void bmp_encode( string fname, string msg ) {
    unsigned char r, g, b;
	int x, y, i;
	bitmap_image img(fname);
	
	img.get_pixel(0, 0, r, g, b);
	r = msg.size();
	img.set_pixel(0, 0, r, g, b);
	i = 0;
	for (x = 1; i < msg.size(); x++) {
		for (y = 1; i < msg.size(); y++) {
			img.get_pixel(x, y, r, g, b);
			r = msg[i]; i++;
			img.set_pixel(x, y, r, g, b);
        }
	}
	img.save_image(fname);
}


string bmp_decode( string fname ) {
    unsigned char r, g, b;
	int x, y, i, size;
	string msg = ""; 
	bitmap_image img(fname);
	
	img.get_pixel(0, 0, r, g, b);
	size = r;
	i = 0;
	for (x = 1; i < size; x++) {
		for (y = 1; i < size; y++) {
			img.get_pixel(x, y, r, g, b);
			r += r; i++;
        }
	}
return msg;
}

int main() {
	ofstream f;
	f.open("1.txt");
	// bmp_encode("result.bmp", "github.com user: zahari pass: 123@@!!");
	f << bmp_decode("result.bmp");
	f.close ();
	return 0;
}

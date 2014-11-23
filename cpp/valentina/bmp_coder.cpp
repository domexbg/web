#include "bitmap_image.hpp"
#include <string>
using namespace std;

void bmp_encode(const string fname, const string msg) {
	unsigned char r, g, b;
	int x, y, i;
	bitmap_image img(fname);
	
	img.get_pixel(0, 0, r, g, b);
	img.set_pixel(0, 0, msg.size(), g, b);
	i = 0;
	for ( x = 1; i < msg.size(); x++) {
		for (y = 1; i < msg.size(); y += 1) {
			img.get_pixel(x, y, r, g, b);
			//msg = "Hello"
			//msg[0] == 'H'
			r = msg[i]; i++;
			img.set_pixel(x, y, r, g, b);
		}
	}
	img.save_image(fname);
}


string bmp_decode(const string fname) {
	unsigned char r, g, b;
	int x, y, i, size;
	string msg = "";
	bitmap_image img(fname);
	img.get_pixel(0, 0, r, g, b);
	size  = r;
	i = 0;
	for ( x = 1; i < size; x++) {
		for (y = 1; i < size; y += 1) {
			img.get_pixel(x, y, r, g, b);
			msg += r; i++;
		}
	}
	
	return msg;
}

int main() {
	bmp_encode("output.bmp", 
	"github.com User: zahari Password: $ecr3t");
	
	cout << bmp_decode("output.bmp") ;
	
	return 0;
}

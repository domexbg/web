#include "bitmap.h"

void bmp_encode( string fname, string msg ) {
    unsigned char r, g, b;
	int x, y, i;
	bitmap_image img(fname);
	
	i = 0;
	for (x = 0; i < msg.size(); x++) {
		for (y = 0; i < msg.size(); y++) {
			img.get_pixel(x, y, r, g, b);
			r = msg[i]; i++;
			img.set_pixel(x, y, r, g, b);
        }
	}
	img.save_image(fname);
}


int main() {
	
	bmp_encode("result.bmp", "github.com user: zahari pass: 123@@!!");
	
	return 0;
}

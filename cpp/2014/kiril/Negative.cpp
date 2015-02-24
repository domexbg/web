# include "BMP.h"

int main() {
	int x, y;
	unsigned char r, g, b, avg;
	
	bitmap_image img("girl1.bmp");
	for (x = 0; x < img.width(); x++) {
		for (y=0 ; y < img.height(); y++) {
			img.get_pixel(x, y, r, g, b);
		r = 255-r; //moge da se napravi i s :	r = ~ r;
		g = 255-g; // 	g = ~ g;
		b = 255-b; //	b = ~ b;
			img.set_pixel(x, y, r, g, b);
		}
	}
	img.save_image("result.bmp");
	return 0;
} 

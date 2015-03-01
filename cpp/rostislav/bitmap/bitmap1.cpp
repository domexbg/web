#include <iostream>
#include "bitmap_image.hpp"
using namespace std;

int main(void)
{
	bitmap_image img("girl2.bmp");
	unsigned char r, g, b;
	img.get_pixel(15, 80, r, g, b);
	cout << (int)r << " " << (int)g << " " << (int)b;
	
	int x, y; 
	for (x = 0; x < img.width(); x++)
	{
		for (y = 0; y < img.height(); y++)
		{
			img.get_pixel(x, y, r, g, b);
			unsigned int gray_c = (r*0.3 + g*0.59 + b*0.11); // = (r + g + b)/3;
					
			img.set_pixel(x, y, gray_c, gray_c, gray_c);
		}
	}
	img.save_image("output_grayscale.bmp");

	return 0;
}

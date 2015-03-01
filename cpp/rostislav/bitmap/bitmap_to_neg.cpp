#include <iostream>
#include "bitmap_image.hpp"
using namespace std;

void negative (bitmap_image &image)
{
	int x, y; 
	unsigned char r, g, b;
	for (x = 0; x < image.width(); x++)
	{
		for (y = 0; y < image.height(); y++)
		{
			image.get_pixel(x, y, r, g, b);
			image.set_pixel(x, y, ~r, ~g, ~b); // (x, y, 255-r, 255-g, 255-b);
		}
	}
	
}

void filterXOR (bitmap_image &image, const int q)
{
	int x, y; 
	unsigned char r, g, b;
	for (x = 0; x < image.width(); x++)
	{
		for (y = 0; y < image.height(); y++)
		{
			image.get_pixel(x, y, r, g, b);
			image.set_pixel(x, y, r ^ q, g ^ q, b ^ q);
		}
	}
	
}

void filterOR (bitmap_image &image, const int q)
{
	int x, y; 
	unsigned char r, g, b;
	for (x = 0; x < image.width(); x++)
	{
		for (y = 0; y < image.height(); y++)
		{
			image.get_pixel(x, y, r, g, b);
			image.set_pixel(x, y, r | q, g | q, b | q);
		}
	}
	
}

void filterAND (bitmap_image &image, const int q)
{
	int x, y; 
	unsigned char r, g, b;
	for (x = 0; x < image.width(); x++)
	{
		for (y = 0; y < image.height(); y++)
		{
			image.get_pixel(x, y, r, g, b);
			image.set_pixel(x, y, r & q, g & q, b & q);
		}
	}
	
}

void filterMULTI (bitmap_image &image, const int q)
{
	int x, y; 
	unsigned char r, g, b;
	for (x = 0; x < image.width(); x++)
	{
		for (y = 0; y < image.height(); y++)
		{
			image.get_pixel(x, y, r, g, b);
			image.set_pixel(x, y, r * q, g * q, b * q);
		}
	}
	
}

int main(void)
{
	bitmap_image img("girl2.bmp");
	cout << "Enter effect coefficient: ";
	int userq;
	cin >> userq;
	filterMULTI (img, userq);
	img.save_image("output_filterMULTI.bmp");
	return 0;
}

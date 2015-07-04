#include "bitmap_image.hpp"


using namespace std;
void make_greyscale();
void make_negative();
void effect_bit_or();

int main ()
{
    make_greyscale();
    make_negative();
    effect_bit_or();

    return 0;
}

void make_greyscale()
{
    unsigned int i,j,x,y;
    unsigned char r,g,b;
    bitmap_image img_1("girl1.bmp");

    for (i=0; i<img_1.width(); i++)
    {
        for (j=0; j<img_1.height(); j++)
        {
            img_1.get_pixel(i,j,r,g,b);
            y=(r+b+g)/3;
            img_1.set_pixel(i,j,y,y,y);
        }
    }
    img_1.save_image("girl_1_greyscale.bmp");

}
void make_negative()
{

        unsigned int i,j,x,y;
        unsigned char r,g,b;
        bitmap_image img_1("girl1.bmp");

        for (i=0; i<img_1.width(); i++)
        {
            for (j=0; j<img_1.height(); j++)
            {
                img_1.get_pixel(i,j,r,g,b);

                r=255-r;
                g=255-g;
                b=255-b;
                img_1.set_pixel(i,j,r,g,b);
            }

        }
        img_1.save_image("girl_1_negative.bmp");

}
/*void make_bg_banner()
{

        unsigned int i,j,x,y;
        unsigned char r,g,b;
        bitmap_image img_2(800,600);

        for (i=0; i<img_1.width(); i++)
        {
            for (j=0; j<img_1.height(); j++)
            {
                img_1.get_pixel(i,j,r,g,b);

                r=255-r;
                g=255-g;
                b=255-b;
                img_1.set_pixel(i,j,r,g,b);
            }

        }
        img_1.save_image("girl_1_negative.bmp");

}
*/void effect_bit_or()
{

    unsigned int i,j,x,y;
    unsigned char r,g,b;
    bitmap_image img_1("girl1.bmp");

    for (i=0; i<img_1.width(); i++)
    {
        for (j=0; j<img_1.height(); j++)
        {
            img_1.get_pixel(i,j,r,g,b);

            r=r | 50;
            g=g | 50;
            b=b | 50;
            img_1.set_pixel(i,j,r,g,b);
        }

    }
    img_1.save_image("girl_1_effect.bmp");

}

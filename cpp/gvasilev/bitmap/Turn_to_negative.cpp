#include "bitmap_image.hpp"


using namespace std;
int main ()
{
    unsigned int i,j,x,y;
    unsigned char r,g,b;
    bitmap_image img_1("girl1.bmp");

    for (i=0; i<img_1.width(); i++)
    {
        for (j=0; j<img_1.height(); j++)
        {
            img_1.get_pixel(i,j,r,g,b);
           // y=(r+b+g)/3;
            r=255-r;
            g=255-g;
            b=255-b;
            //x=r+b+g;


           /* cout << int(r_) <<" "<<int( g_) <<" "<< int(b_)<<" "<<endl;*/
            img_1.set_pixel(i,j,r,g,b);
            //img_1.set_pixel(i,j,y,y,y);
        }
    }
    img_1.save_image("girl_1_negative.bmp");
    return 0;
}

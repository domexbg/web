#include "bitmap_image.hpp"


using namespace std;
int main ()
{
    bitmap_image img_1("girl1.bmp");
    convert_to_grayscale();
    img_1.save_image("girl_1_edit.bmp");
    return 0;
}

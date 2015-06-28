#include "bitmap_image.hpp"


using namespace std;
int main ()
{
   bitmap_image img_1("girl1.bmp");
   cout << img_1.width()<<endl<<img_1.height()<<endl;
  for (int j=100;j<=200;j++)
  {
      for(int i=1;i<=img_1.width();i++)
   {
       img_1.set_pixel(i,j,0,0,0);
   }
  }
   img_1.save_image("girl_1_edit.bmp");
    return 0;
}

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
size = r;
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

# include "BMP.h"
#include <string>
using namespace std;
//"Password: $ecr3t"
void bmp_encode ( string fname, string msg ) {
int x, y, i;
unsigned char r, g, b;
bitmap_image img(fname);
img.get_pixel(0, 0, r, g, b);
r= msg.size();
img.set_pixel( 0, 0, r, g, b);
i=0;
for (x = 0; i < msg.size(); x++) {
for (y=0 ; i < msg.size(); y++) {
img.get_pixel(x, y, r, g, b);
r = msg[i]; i++;
img.set_pixel(x, y, r, g, b);
}
}
img.save_image(fname);
}
int main() {
bmp_encode("result.bmp", "github.com user zahari pass: 123@@!!");
return 0;
}

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
msg += r; i++;
}
}
return msg;
}
int main() {
ofstream f;
f.open("1.txt");
bmp_encode("result.bmp", "github.com user: zahari pass: 123@@!!");
f << bmp_decode("result.bmp");
f.close ();
return 0;
}

#include "bitmap_image.hpp"
int main() {
unsigned char r, g, b;
int x, y;
bitmap_image img("girl1.bmp"); // zarejdane na kartinka .bmp format
for(x=0;x<img.width(); x++) {
for(y=0; y<img.height(); y+=1){
img.get_pixel(x,y,r,g,b);
//fprintf(stdout, "(%d, %d) => rgb(%d, %d, %d)\n", x,y,r,g,b);
//system("pause");
if (x<10) {
r=g=b=0;
}
img.set_pixel(x,y,r,g,b);
}
}
img.save_image("output.bmp");
return 0;
}

#include <stdio.h>
#include <assert.h>
#include <stdlib.h>
char *dec2bin( const int n ) {
unsigned int mask = 0x8000000;
static char res[100] = "";
int i = 0;
int flag = 0;
while ( mask ) {
flag |= (n & mask);
if ( flag ) {
res[i] = (n & mask) ? '1' : '0';
i++;
}
mask >>= 1;
}
res[i] = '\0';
return res;
}
int main()
{
int x;
x = 0xF8 | 0xF4;
fprintf(stdout, "0x%X\n0b%s\n", x, dec2bin(x) );
return 0;
}





#include <stdio.h>

int main() {
  int age;
  fprintf(stdout, "Enter age: ");
  fscanf(stdin, "%d", &age);
  switch (age) {
        case 0:
        case 1:
        case 2:
        case 3:
            fprintf(stdout, "Baby\n");
            break;
        case 4:
        case 5:
        case 6:
        case 7:
            fprintf(stdout, "Kindergarden\n");
            break;
        case 8:
        case 9:
        case 10:
        case 11:
        case 12:
        case 13:
        case 14:
        case 15:
        case 16:
        case 17:
        case 18:
            fprintf(stdout, "School\n");     
            break;
        case 19:
        case 20:
        case 21:
        case 22:
        case 23:
        case 24:
        case 25:
            fprintf(stdout, "Uni\n");     
            break;
        default:
            fprintf(stdout, "Work\n");     
  }
  
  return 0;
}

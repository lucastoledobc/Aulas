#include <stdio.h>

int main() {
    int myNum = 15;
    printf("%d\n", myNum);

    float num2 = 0.5;
    printf("%f\n", num2);

    char letra = 'D'; //tem que ser aspas simples
    printf("%c\n", letra);

    printf("\nNúmero: %f \nLetra: %c", num2, letra);

    // ou de forma direta:

    printf("\nNúmero: %d \nLetra: %c", 15, 'L');
} 
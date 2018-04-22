// Fibonacci_cplus.cpp: define el punto de entrada de la aplicación de consola.
//

#include "stdafx.h"
#include <stdio.h>
#include <stdlib.h>

static int n = 60;
static long int fibonacciCache[60];

static long fibonacciProgDinamica (int num){
    if (num < 0)
    {
        printf("Number can not be less than zero");	
    }
    if (num <= 2)
    {
        fibonacciCache[num] = 1;
    }
    if (fibonacciCache[num] == 0)
    {
        fibonacciCache[num] = fibonacciProgDinamica(num - 1) + fibonacciProgDinamica(num - 2);
    }
    return fibonacciCache[num];
}

void main()
{
	
	///////////////////////////////////////////////////
    //// Algoritmo 1 Fibonacci ///////
	///////////////////////////////////////////////////
	printf("FIBONACCI HASTA EL NRO: %d", n);
	unsigned long int a = 0, b = 1, c = 0;
	for(int i = 0; i < n; i++){
		c = a + b;
		a = b;
		b = c;
		printf("\n %d %lu  ", (i+1), a);
	}

	////////////////////////////////////


	///////////////////////////////////////////////////
    //// Algoritmo 2 Fibonacci - Prog. Dinámica ///////
	///////////////////////////////////////////////////
	a = 0, b = 1, c = 0;
    for (int i = 0; i < n; i++) {
		a = fibonacciProgDinamica(i);
        printf("\n %d %lu  ", (i+1), a);
	}
			
    ///////////////////////////////////////////////////

	getchar();
    system("clear");
}


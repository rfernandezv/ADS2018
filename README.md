# Big O Notation - Java - 18-1 - Partial

----------------------------
Tarea 2:
----------------------------
Para esta tarea se realizó la migración del algoritmo para encontrar la serie fibonacci, lineal y dinámica en los lenguajes:
 - PHP
 - C#
 - Visual C++
 - Genexus
 - Javascript 
 -------------------------------------------------------------------------------------------------------
 - Creé la carpeta "archivos" donde están sólo los códigos fuentes del algoritmo para cada lenguaje.
 - Creé la carpeta "proyectos" donde están las soluciones de c# (ConsoleApplication1), visual c++ (Fibonacci_cplus), y el xpz de la base de conocimiento de GX.
El algoritmo hecho en clase lo programé en el lenguaje Java.


-------------------------------------------------------------------------------------------------------------------------------------

----------------------------
Tarea 1:
----------------------------
--------------------------------------------------------
1: Complejidad logarítmica de la búsqueda binaria
--------------------------------------------------------
Para entender y explicar la complejidad logarítmica de la búsqueda binaria se empezó comprobando su efectividad en la búsqueda. Se verificó el performance llenando 2 listas: uno de 400 000 y otro de 4 000 000 de números, pero se colocó un número a buscar que no existe en la lista para tratar de crear el peor escenario y el algoritmo realice todas las posibilidades posibles. El resultado en consola fue el siguiente:
------------------------------------------------------------------------
 - Number of list: 400 000
 - Not found
 - Number of actions: 19
 - Total time: 1.388s
------------------------------------------------------------------------

------------------------------------------------------------------------
 - Number of list: 4 000 000
 - Not found
 - Number of actions: 22
 - Total time: 3.007s
------------------------------------------------------------------------

Con incrementar 10 veces el número de datos de la lista, el algoritmo sólo realizó 3 intentos más (de 19 a 22) lo cual se comprueba su eficiencia notablemente a medida que la longitud de la lista aumenta. Dicha eficiencia está en que en cada comparación elimina aproximadamente la mitad de los ítems restantes de la lista. Como ejemplo, con los 400 000 números, ¿Cuál es el número máximo de comparaciones que el algoritmo requerirá para examinar la lista completa? Se empieza con 400 000 valores, la segunda comparación habrá 200 000, la siguiente habrá 100 000 y así sucesivamente. A continuación la división detallada de todas las posibilidades:

- 1==>	400 000
- 2==>	200 000
- 3==>	100 000
- 4==>	 50 000
- 5==>	 25 000
- 6==>	 12 500
- 7==>	  6 250
- 8==>	  3 125
- 9==>	  1 562 (redondeando al dividir el valor)
- 10==>	   781
- 11==>	  	390 (redondeando al dividir el valor)
- 12==>		  195
- 13==>		   97 (redondeando al dividir el valor)
- 14==>		   48 (redondeando al dividir el valor)
- 15==>		   24
- 16==>		   12
- 17==>		    6
- 18==>		    3 
- 19==>		    1 (redondeando al dividir el valor)
  
Si contamos las veces que dividimos están las 19 veces que el resultado en consola mostró. 
Entonces cuando dividimos la lista suficientes veces, terminamos con una lista cada vez menor (n/2, n/4, n/8, n/16,...).
El número de comparaciones necesarias para llegar al final sería n/2^x, por lo tanto el número máximo de comparaciones es logarítmica con respecto al número de ítems de la lista.
Como detalle final e importante, la lista tiene que estar ordenada para que la búsqueda binaria funcione.


--------------------------------------------------------
2: Complejidad exponencial de la serie de fibonacci
--------------------------------------------------------
El algoritmo de fibonacci muestra una complejidad exponencial en el algoritmo recursivo otorgado en clase
Analizando su complejidad se observa que, recursivamente, se llama a sus dos anteriores posiciones creando un árbol de llamadas que aumenta de acuerdo al número final a calcular. Como ejemplo, si calculamos la serie fibonacci:
 - Hasta 2 posiciones: F(2), se calcula 1 vez F(1) y F(0)
 - Hasta 3 posiciones: F(3), se calcula 1 vez F(2), 2 veces F(1) y 1 vez F(0)
 - Hasta 4 posiciones: F(4), se calcula 1 vez F(3), 2 veces F(2), 3 veces F(1) y 2 veces F(0)
 - Hasta n posiciones  F(n), se calcula 1 vez F(n-1), 2 veces F(n-2), ...
 
 Entonces se observa que ha medida que el número final a calcular es mayor, tambien lo será las excesivas operaciones que se tienen que calcular, volviendo el algoritmo complejo en cálculo y por consecuencia en tiempo de respuesta.
 Por lo tanto el número excesivo de operaciones repetidas que se realiza recursivamente en el algoritmo le da la complejidad exponencial, aumentando de acuerdo al número final a calcular.



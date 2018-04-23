# Big O Notation - Java - 18-1 - Partial

----------------------------
Tarea 2:
----------------------------
Se realizó la migración del algoritmo para encontrar la serie fibonacci, lineal y dinámica en los lenguajes:
 - PHP
 - C#
 - Visual C++
 - Genexus
 - Javascript 
 
El algoritmo hecho en clase lo programé en el lenguaje Java.
Creé la carpeta "archivos" donde están los código fuente del algoritmo para cada lenguaje.

-------------------------------------------------------------------------------------------------------------------------------------

----------------------------
Tarea 1:
----------------------------
--------------------------------------------------------
1: Complejidad logarítmica de la búsqueda binaria
--------------------------------------------------------
Para entender y explicar la complejidad logarítmica de la búsqueda binaria se empezó comprobando su efectividad en la búsqueda.
Se verificó el performance con 2 listas: uno de 400 000 y otro de 4 000 000 datos, pero se colocó un dato a buscar que no existe en la lista para tratar de crear el peor escenario y el algoritmo realice todas las posibilidades posibles

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

Con incrementar 10 veces el número de datos de la lista el algoritmo sólo realizó 3 intentos más (de 19 a 22) lo cual se comprueba su eficiencia notablemente a medida que la longitud de la lista aumenta. Dicha eficiencia está en que en cada comparación elimina aproximadamente la mitad de los ítems restantes de la lista. Como ejemplo, con 400 000 datos, ¿Cuál es el número máximo de comparaciones que el algoritmo requerirá para examinar la lista completa? Si empezamos con 400 000 valores, la segunda comparación habrá 200 000, la siguiente habrá 100 000 y así sucesivamente. ¿Cuántas veces podemos dividir la lista en el peor de los casos? A continuación la división detallada:

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
- 18==>		    3 (redondeando al dividir el valor)
- 19==>		    1
  
Si contamos las veces que dividimos están las 19 veces que el resultado en consola mostró. 
Entonces cuando dividimos la lista suficientes veces, terminamos con una lista cada vez menor (n/2, n/4, n/8, n/16,...).
El número de comparaciones necesarias para llegar al final sería n/2^n, por lo tanto el número máximo de comparaciones es logarítmica con respecto al número de ítems de la lista.
Como detalle final e importante, la lista tiene que estar ordenada para que la búsqueda binaria funcione.

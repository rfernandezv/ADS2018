<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<?php
		
		if ($_POST['numero']){
            $valor = $_POST['numero'];
        }else{
			$valor = 0;
		}
			 
		function fibonacciProgDinamica ($n){
  		
            if ($n < 0) {
				echo "N can not be less than zero";
                return 0;
            }
            if ($n <= 2) {
                return 1;
            }

    		$res[0] = 0;
    		$res[1] = 1;
    		
    		for ($k = 2; $k <= $n; $k++)
    		{
    			$res[$k] = $res[$k-2] + $res[$k-1];
    		}
    		return $res[$n];
        }
	?>
	
		<form name ="formulario" id="formulario" method="post" action="fibonacci_php.php">
		    <input type="text" name="numero" id="numero" value="<?php echo $valor; ?>" /> 
			<input type="submit" name="boton" id="boton" value="Buscar" />
		<?php
			if($valor > 0){
			   $n = $valor;
			   
			   for ($i = 0; $i < $n; $i++) {
				   $a = fibonacciProgDinamica($i);
				   echo "<br> ". ($i+1) . " = ". $a . "</br>";
			   }
			   /*
			   
			   Algoritmo 2 - Fibonacci
			   $a = 0;
			   $b = 1;
			   $c = 0;
			   for($i = 0; $i < $n; $i++){
					$c = $a + $b;
					$a = $b;
					$b = $c;
					echo "<br> ". ($i+1) . " = ". $a . "</br>";
					
			   }
				*/
			}
        ?>
		</form>
        
    </body>
</html>

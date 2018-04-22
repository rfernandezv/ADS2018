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
	<script type="text/javascript">
		function procesa(n){
			var f = document.formulario;
			var n = f.numero.value;
			var a = 0, b = 1, c = 0;
			for (var i=1; i<=n; i++) {
				c = a + b;
				a = b;
				b = c;
				document.writeln("<br> " + (i) + "=>"+a);
			}
		}
	</script>
    <body>
		<form name ="formulario" id="formulario" method="post" action="fibonacci_js.php">
		    <input type="text" name="numero" id="numero" value="" /> 
			<input type="button" name="boton" id="boton" value="Buscar" onClick="procesa()" />
		</form>
        
    </body>
</html>

<html>
<head
<meta name="keywords" content="HTML5,CSS3,JavaScript" />
<link rel="stylesheet" href="colores.css"/>
</head>
<body >

<?php
//CASTILLO MORENO CANDY CLAUDIA
echo"<h1> Tabla  numeros 1 al 100 </h1>";
echo"<label> Las filas pares se pintan en color <span class ='rojo'> rojo</span></label>";  echo"</br>";
echo"<label> Las filas impares se pintan en color <span class = 'azul'> azul</span></label>";
echo "<table>";
 $cont = 1;
for($fila=1;  $fila <=10; $fila++){
echo "<tr>";
for($col= 1; $col <=10; $col++ ){
//$clase= ""; 




if($fila % 2 == 0 ){
//$clase = "par";
echo"<td ><span class ='rojo'> ".$cont++;  echo" </span></td>"; 
}
else{
//$clase = "impar";
echo"<td ><span class ='azul'> ".$cont++;  echo" </span></td>"; 
}









}
echo"</tr>";
}
echo"</table>";
?>

</body>
</html>
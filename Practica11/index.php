<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica11-Variables</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>VARIABLES </H1>
    <?php
    $Nombre='Meza Rosales Citlali';
    $Edad=22;
    $Beca=3500.50;
    $Estatus=true;
    echo"Tipos de variables <br>";
    echo $Nombre.'<br/>';  //El punto significa concatenar//
    echo $Edad.'<br/>' ;
    echo $Beca.'<br/>';
    echo $Estatus.'<br/>';
    
   echo $Nombre.'Tiene'.$Edad.'Años de edad y gana'.$Beca.'<br/>';
   
    ?>
    <h1>Operadores Aritmeticos<h1/>

    <?php
    $Numero1=10;
    $Numero2=5;
    $Suma=$Numero1+$Numero2;
    $Resta=$Numero1-$Numero2;
    $Multiplica=$Numero1*$Numero2;
    $Division=$Numero1/$Numero2;

    echo 'La SUMA es='.$Suma.'<br/>';
    echo 'La RESTA es='.$Resta.'<br/>';
    echo 'La MULTIPLICACION  es='.$Multiplica.'<br/>';
    echo 'La DIVISION es='.$Division.'<br/>';
    echo 'Incremento de Suma es='.$Suma++.'<br/>';
    echo 'Decremento de Suma es='.$Suma--.'<br/>';
    echo 'Residuo es='.$Numero1%$Numero2;


    ?>


</body>
</html>
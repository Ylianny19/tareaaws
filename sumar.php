<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $valor1=$_POST['T1'];
    $valor2=$_POST['T2'];
    $valor3=$_POST['T3'];
    $suma=$valor1+$valor2+$valor3;
    echo 'Suma = ' . $suma;
    ?>
</body>
</html>
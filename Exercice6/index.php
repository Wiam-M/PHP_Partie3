<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice6</title>
</head>
<body>
    <h1>Créez une fonction qui retourne l'addition de trois nombres.</h1>

    <?php
    
    function SumFunction($x,$y,$z){
        $sum = $x + $y + $z;
        echo "la somme de troix nombres est : " .$sum;
        return $sum;
    }
    SumFunction(5,3.5,9)
    
    ?>
</body>
</html>
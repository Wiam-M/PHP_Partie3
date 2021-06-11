<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice5</title>
</head>
<body>
    <h1>Créez une fonction qui retourne une chaîne de caractère et un nombre aléatoire.</h1>
    <?php
    function RandStringFunction($string){
        $rand_Number = rand(0,100);
        $stringAndRandNumber = $string . ' '. $rand_Number ;
        echo $stringAndRandNumber;
        return $stringAndRandNumber;
    }
    
    RandStringFunction("Hello World")
    ?>
</body>
</html>
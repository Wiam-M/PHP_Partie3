<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice1</title>
</head>
<body>
    <h1>Exercice1: Créez une fonction qui retourne un booléen.</h1>
    <?php
    function BooleenFunction($t)
    {
        $x = 2;
        $y= 3;
        if ($x + $y == $t) {
            // echo "c'est True";
            return true;
        }else {
            // echo "c'est False";
            return false;
        }
    }
    echo BooleenFunction(5);
    // echo 'boolval de 6: '.( boolval( 6 )? 'true' : 'false')."<br>";
    // echo 'boolval de []: '.( boolval( [] )? 'true' : 'false')."\n";
    ?>

</body>
</html>
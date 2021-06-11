<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Créez une fonction qui retourne deux nombres aléatoire allant de 1 à 15. </h1>
        <ol>
            <li> Si le premier nombre est plus grand que le deuxième affichez "le premier nombre est plus grand que le deuxième"</li>
            <li> sinon si le deuxième nombre est plus grand affichez "le premier nombre est plus petit que le deuxième".</li>
            <li>  affichez "les deux nombres sont égaux" si les deux nombres sont identiques.</li>
        </ol>
    <?php
        function randTwoNumber($a,$b){
            if ($a > $b) {
                echo "<h2>le premier nombre est plus grand que le deuxième</h2>";
            }elseif($a < $b){
                echo "<h2>le premier nombre est plus petit que le deuxième</h2>";
            }else {
                echo "<h2>les deux nombres sont égaux</h2>";
        }
        $c = "deux nombres aléatoire allant de 1 à 15". $a . ' ' . $b;
        return $c;
    }
        $number1 = rand(1, 15);
        var_dump($number1);
        $number2 = rand(1,15);
        var_dump($number2);
        randTwoNumber($number1, $number2);
    
    ?>
</body>
</html>
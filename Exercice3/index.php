<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Créez deux variables contenant chacune une string. Créez une fonction qui retourne le contenu de ces deux variable.</h1>
    <?php
    $var1 = "Hello ";
    $var2 = "Avignon ";
    function TwoStringFunction()
    {
       global $var1;
       global $var2;
       $var3 = "la premiere variable est : ". $var1 ."la deuxieme est : ". $var2;
       echo $var3;
       return $var3;
    }
    TwoStringFunction()

    // $truth1 = 'Marcela';
    //  $truth2 = 'is cool';
     
    // function giveMeTwo($go, $ga){
      
    //   $message = $go.$ga;
    //  var_dump ($message);
    //     return $message;
    // }
    // giveMeTwo($truth1, $truth2);
    
    
    ?>
</body>
</html>
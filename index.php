<?php 

    //Variables
    $my_string = "Hola mundo";
    $my_int = 1;
    $my_bool = true;

    echo "$my_string";

    //Constantes
    const MY_CONSTANT = "Esto es una constante.";

    //Listas (Arrays)
    $my_array = [0, 1, 2];
    print_r($my_array[2]);

    //Flujos (Bucles)
    for ($index = 0; $index < 10; $index++){
        print_r( "Esto es un ciclo for" . "\n") ;
    }

    foreach ($my_array as $my_item){
        print_r($my_item . "\n");
    }

    $new_index = 0;
    while ($new_index <= sizeof($my_array) - 1){
        print_r($my_array[$new_index] . "\n");
        $new_index++;
    }

    //Condicionales
    if ($my_int == 10){
        print_r("Si, my_int vale 10");
    } elseif ($my_int == 11){
        print_r("no, my_int vale no 10");
    } else{
        print_r("No es ninguno de ellos");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $my_string?></title>
</head>
<body>
    
</body>
</html>
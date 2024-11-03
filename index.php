<?php 
    // Variable
    $nombre = "Gonzalo Araya";
    // Constante
    define('CURSO', 'PHP 9 desde cero');
    // Constante de tipo array
    define('ANIMALES', ['perro', 'gato', 'loro', 'tortuga']);

    // Usamos defined para consultar si existe la constante
    if(defined('CURSO')){
        echo "Si se ha definido";
    }

    // Constantes globales de php
    echo "Mi version de php es " . PHP_VERSION;
    echo "<br>";
    echo "Mi sistema operativo es " . PHP_OS;
    echo "</br>";
    echo __LINE__;

    //Tipos de datos
    // Integer - Solo si lo tratamos como número podemos usar operadores matemáticos sino no
    $numero = 127;
    $numeroDecimal = 23.5;

    // String
    $cadena = "Hola mundo";

    // Si queremos usar comillas dobles debemos encerrar la cadena en comillas simples y viceversa
    $cadenConComilla = 'Hola mundo mi nombre es "Gonzalo"';
    // Para usar los dos tipos de comilla debemos escapar uno de los tipos de comillas
    $cadenaConEscape = "Hola mundo soy 'Gonzalo y tengo \"33\" años";

    // boolean - En php true es = 1 y false = 0
    // Cualquier valor en boolean es igual a true a excepcion del cero
    $bool = true;

    // operadores lógicos y de comparación
    $a = 6;
    $b = 6;

    // Comparacion
    echo $a == $b;
    var_dump($a == $b);
    var_dump($a != $b);
    var_dump($a >= $b);
    var_dump($a <= $b);

    // lógicos
    $c = true;
    $d = true;

    var_dump($c && $d);
    var_dump($c || $d);

    // Condicional if
    $e = 2;
    $f= 3;

    echo "<br>";
    if($e > $f){
        echo "El valor de e es mayor que f";
    } elseif($e < $f){
        echo "El valor de e es menor que f";
    } else {
        echo "El valor de e es igual que el valor de f";
    }

    echo "<br>";
    // Ternario
    $valor = $e > $f ? "El valor de e es mayor que f" : "El valor de e es menor que f";
    echo "$valor";

    // Anidar ternarios : para anidarlos usamor parentesis
    $valor = $e > $f ? "mayor" : ( $e < $f ? "mayor" : "igual");

    // Estructuras de control o seleccion multiple
    switch($a){
        case '1':
            echo "lunes";
            # code ...
            break;
        case '2':
            echo "martes";
            # code ..
            break;
        default:
            echo "predeterminado";
    }

    // analizamos una variable
    echo match($a){
        1 => "Lunes",
        2 => "Martes",
        default => "predeterminado"
    };

    // Bucles
    $i = 1;

    while($i <= 10){
        echo "Hola mundo <br>";
        $i++;
    };

    echo "Has salido del bucle";


    // For y foreach
    $base = 5;
    $exp = 4;
    $resultado = 1;

    for($i = 0; $i <= $exp; $i++){
        $resultado = resultado*base;
    }
    echo "El valor de $base elevado a la $exp es igual a $resultado";

    $nombres = ['Victor', ' Iris', "Elizabeth", "Joel"];

    foreach($nombres as $nombre){
        echo $nombre . "<br>";
    };

    // Si queremos rescatar el indice hacemos:
    foreach ($nombres as $indice => $nombre){
        echo $nombre . " se encontraba en el indice: $indice";
    };

    // funciones en php
    echo "Marca de tiempo ". time() . "<br>";
    echo "Raiz cuadrada de 9: ". sqrt(3) . "<br>";
    echo "Numero alertorio entre 90 y 100: " . rand(90, 100) . "<br>";
    echo "Valor de pi: ". pi() . "<br>";

    // funcioones definidas por el usuario
    function factorial($n){
        for($i=1; $i <=$n; $i++){
            $resultado = $resultado * i;
        }
        return $resultado;
    }

    $resultado = factorial(9);

    echo "El factorial de 9 es:  $resultado";

    // Argumentos variables
    function concatenar(...$palabras){
        $resultado = "";
        foreach($palabras as $palabra){
            $resultado = $resultado . $palabra . " ";
        };

        echo $resultado;
    }

    concatenar("curso", "php", "8", "desde", "cero");

    //Funciones con tipado definido
    function sumarEnteros(int $entero1 , int $entero2): int{
        return $entero1 + $entero2;
    }

    // Si pasamos un float, lo transforma a entero
    $resultado = sumarEnteros(2, 5.4);

    echo $resultado;

    // Manupulacion de cadenas
    $cadena = "aeio";

    // Averiguar el largo de la cadena
    echo strlen($cadena) ."<br>";
    // Averiguar la posicion de un caracter
    echo mb_strpos($cadena,"i") ."<br>";
    //Averiguar si contiene un caracter
    echo str_contains($cadena,"e") ."<br>";
    
    $cadena1 = "hola";
    $cadena2 = "hola";

    // comparar cadenas
    if(strcmp($cadena1, $cadena2)){
        echo "Las dos cadenas son iguales <br>";
    } else {
        echo "las cadenas son diferentes"
    }

    // remplazar
    echo str_replace($cadena1, "hola mundo");
    // A mayuscula
    echo strtoupper($cadena2);

    // Arreglos unidimensionales
    $array = [10, 13, 15, 20];
    array_push($array, 5);

    // Asignar info en un array tipo diccionario
    $datos = [
        "nombre" => "Gonza".
        "email" => "gonxaraya991@gmail.com"
    ]

    echo $datos["email"] . "<br>";

    // multidimensionales
    $datos1 = [
        [
            "nombre" => "Gonza".
            "email" => "email1@gmail.com"
        ],
        [
            "nombre" => "Ruth".
            "email" => "email2@gmail.com"
        ],
        [
            "nombre" => "Joa".
            "email" => "email3@gmail.com"
        ]
    ]

    echo $datos1[2]["nombre"] ."<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Si usamos comillas dobles php si reconoce la variable, si usamos comillas simples
    lo reconoce como cadena -->
    <h1><?php echo "Hola mundo mi nombre es $nombre"; ?></h1>
<!-- Imprimimos la constante llamandola directamente por su nombre-->
    <h2><?php echo CURSO ?></h2>
<!-- Imprimimos contante de tipo array-->
    <h2><?php echo ANIMALES[0] ?></h2>
</body>
</html>
<?php

//php lenguaje de tipado dinamico y gradual

//declarando variables
echo "Hola mundo "; //echo para Imprimir consola php
echo " <h1> Hola mundo </h1>";
$name = "Juanqui!!";
$int = 56;
$int2 = 10;
$char_numero = "30";
$suma_variables = $int + $int2 + $char_numero;
$boolean_weirdo = true;

$suma_rara = 48 + "2"; //consola: 50 💀💀

$intento_concatenar = "20" + "20"; // consola: 40 💀💀

// El simbolo mas no puede concatenar cadenas de texto


//para concatenar texto utilizar .
$concatenar_num = $int . $suma_variables; //salida 5696

//instruccion para obtener en tipo de variable var_dump
$tipo_name = var_dump($name);
$tipo_int1 = var_dump($int);
$tipo_intentoConcatenar = var_dump($intento_concatenar);


//Utilizando funciones getType
echo gettype($intento_concatenar) . "\n";
echo gettype($name);


?>


<p>
    <?= $tipo_int1;?>
    <?= $tipo_name;?> 
    <?= $tipo_intentoConcatenar;?>
</p>


<h1>
    <?= $suma_rara;
    ?> 
</h1>

<h1>
    <?= $suma_variables;
    ?> 
</h1>
<h1>
    <?= $concatenar_num;
    ?> 
</h1>


<h1>
    <?= "Hola " . $name //para concatenar se utiliza el .
    ?> 
</h1>




<style> 
    /* estilos que agrego el midu*/
    :root{
        color-scheme:  light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>
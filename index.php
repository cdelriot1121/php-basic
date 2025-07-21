<?php

echo "Hola mundo \n";
echo "\n";
$name = "Juanqui!!";
$int = 56;
$int2 = 10;
$suma_variables = $int + $int2;
$boolean_weirdo = true;

$suma_rara = 48 + "2"; //consola: 50 💀💀

$intento_concatenar = "20" + "20"; // consola: 40 💀💀

// El simbolo mas no puede concatenar cadenas de texto

echo "\n";
echo "\n";
echo $name;

?>



<h1>
    <?= $suma_rara;
    ?> 
</h1>

<h1>
    <?= $suma_variables;
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
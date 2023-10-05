<?php

/* Declaración de variables */
$entero = 4; // tipo integer
$numpero = 4.5; // tipo flotante
$cadena = "cadena"; // tipo cadena de caracteres
$bool = true; // tipo booleano

/* Cambio de tipo de variable */
$a = 5; // entero
echo gettype($a); // imprime el tipo de dato de a
echo "</br>";
$a = "Hola"; // cambia a tipo cadena (string)
echo gettype($a); // se comprueba que ha cambiado a tipo string

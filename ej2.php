<?php
$un_bool = TRUE; // un valor booleano
$un_str = "foo"; // una cadena de caracteres
$un_str2 = 'foo'; // una cadena de caracteres
$un_int = 12; // un número entero
echo gettype($un_bool); // imprime: boolean
echo gettype($un_str); // imprime: string
// Si este valor es un entero, incrementarlo en cuatro
if (is_int($un_int)) {
$un_int += 4;
echo "<h2 style='background: pink'>Sumar 4 a la variable un_int</h2>
    <p>$un_int</p>";
}
// Si $un_bool es una cadena, imprimirla
// (no imprime nada)
if (is_string($un_bool)) {
echo "<h2 style='background: pink'>Cadena:</h2>
    <p>$un_bool</p>";
}
// Imprimir $un_str + $un_int
echo "<h2 style='background: pink'>Concatenacion de string y integer:</h2>
    <p>$un_str + $un_int </p>";
// Imprimir $un_str + $un_str2
echo "<h2 style='background: pink'>Concatenar cadenas str y str2:</h2>
     <p>$un_str + $un_str2</p>";
?>
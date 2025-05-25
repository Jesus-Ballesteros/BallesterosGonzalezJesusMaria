<?php
/**
 * Scrip para la Tarea 5 de DaAW para documentacion de archivos PHP
 * @file practica-Ballesteros.php
 *  @author Jesus Ballesteros
 *  @version 2.0.0
 *  @package tarea5Daw
 *
 */
/**
 * Suma dos numeros enteros.
 *
 * Esta funcion basica toma dos valores enteros como entrada y calcula su suma.
 *
 * @param int $numero1 El primer numero entero que se sumara.
 * @param int $numero2 El segundo numero entero que se sumara.
 * @return int El resultado de la suma de $numero1 y $numero2.
 */
function sumarEnteros(int $numero1, int $numero2): int
{
    return $numero1 + $numero2;
}
/**
 * Multiplica dos numeros enteros.
 *
 * Esta funcion realiza la operacion de multiplicacion entre dos valores enteros.
 * Es esencial para calculos de producto que requieren precision entera.
 *
 * @param int $factor1 El primer factor (multiplicando) de la operacion.
 * @param int $factor2 El segundo factor (multiplicador) de la operacion.
 * @return int El producto resultante de la multiplicacion.
 * @internal Esta seccion de la documentacion es visible unicamente para desarrolladores.
 */
function multiplicarEnteros(int $factor1, int $factor2): int
{
    return $factor1 * $factor2;
}

/**
 * Divide dos numeros enteros.
 *
 * Realiza la division entera de un dividendo entre un divisor.
 * Esta funcion es critica y lanzara un error si se intenta dividir por cero.
 * El resultado es un entero, truncando cualquier parte decimal.
 *
 * @param int $dividendo El numero entero que sera dividido.
 * @param int $divisor El numero entero por el cual se dividira. No puede ser cero.
 * @return int El cociente entero de la division.
 * @throws DivisionByZeroError Si el valor del divisor es cero.
 */
function dividirEnteros(int $dividendo, int $divisor): int
{
    if ($divisor === 0) {
        throw new DivisionByZeroError("¡Error! No se puede dividir por cero.");
    }
    return intdiv($dividendo, $divisor); // intdiv() asegura la division entera en PHP
}

// --- Ejemplos de Uso de las Funciones ---

echo "--- Operaciones Aritmeticas Basicas (DAW 5) ---" . PHP_EOL;

// Ejemplo de Suma
$numA = 15;
$numB = 7;
$resultadoSuma = sumarEnteros($numA, $numB);
echo "La suma de {$numA} y {$numB} es: {$resultadoSuma}" . PHP_EOL;

// Ejemplo de Multiplicacion
$factorX = 6;
$factorY = 9;
$resultadoMultiplicacion = multiplicarEnteros($factorX, $factorY);
echo "El producto de {$factorX} y {$factorY} es: {$resultadoMultiplicacion}" . PHP_EOL;

// Ejemplo de Division (caso exitoso)
$dividendo1 = 20;
$divisor1 = 4;
try {
    $resultadoDivision1 = dividirEnteros($dividendo1, $divisor1);
    echo "La division de {$dividendo1} entre {$divisor1} es: {$resultadoDivision1}" . PHP_EOL;
} catch (DivisionByZeroError $e) {
    echo "¡Problema en la division!: " . $e->getMessage() . PHP_EOL;
}

// Ejemplo de Division (caso de error por cero)
$dividendo2 = 10;
$divisor2 = 0;
try {
    $resultadoDivision2 = dividirEnteros($dividendo2, $divisor2);
    echo "La division de {$dividendo2} entre {$divisor2} es: {$resultadoDivision2}" . PHP_EOL;
} catch (DivisionByZeroError $e) {
    echo "¡Problema en la division!: " . $e->getMessage() . PHP_EOL;
}

?>

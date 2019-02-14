<?php
require_once 'calculadora.php';
$a=30;
$b=20;
$c = 4.568;

$calc = new Calculadora();
echo "<h3>Calculadora basica usando POO</h3>";
echo "<br/><h4>La suma de $a + $b es: ". $calc->sumar($a, $b)."<h/4>";
echo "<h4>La resta de $a - $b es: ".$calc->restar($a, $b)."<h/4>";
echo "<h4>La multiplicacion de $a * $b es: ".$calc->mult($a, $b)."<h/4>";
echo "<h4>La división de $a / $b es: ".$calc->divi($a, $b)."<h/4>";
echo "<h4>La potencia de $a sobre $b es: ".$calc->pot($a, $b)."<h/4>";
echo "<h4>La parte entera de $c es: ".$calc->parteEntera($c)."<h/4>";

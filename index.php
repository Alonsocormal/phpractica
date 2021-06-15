<?php
#DECLARANDO FUNCION
function Hola(){
    echo "Bienvenido";
}

#LLAMAR FUNCION
Hola();
echo "<br><br>";
#FUNCIONES CON PARAMETROS
function despedida($bye){
    echo $bye;
}
#LLAMAR FUNCION CON PARAMETRO
despedida("Hasta luego");

echo "<br>";
#FUNCION CON RETURN
function retorno($retornar){
    return $retornar;
}

echo retorno("Retornar a universidad ");

#ejercicio

#Funcion con parametro

echo "<br>";
function multiplicar($numero){
    $respuesta=$numero*2;
    echo $respuesta;
}

multiplicar(5);

#ejercicio con funcion con retorno
echo "<br><br>";
function suma($num1,$num2){
    $res=$num1+$num2;
    return $res;
}
echo suma(5,3);

#ejercicio costo hotel
#Con parametro
echo "<br><br>";
function costo_hotel($nroCoches){
    $pagar=$nroCoches*90;
    echo "El total a pagar por $nroCoches coches es: $pagar";
}
costo_hotel(5);
#Con retorno
echo "<br><br>";
function costo_hotel2($nroCoches){
    $pagar=$nroCoches*90;
    return $pagar;
}
echo "El total a pagar es: ";
echo costo_hotel2(5);
#Sin parámetro
echo "<br><br>";
function costo_hotel3(){
    $nroCoches=5;
    $pagar=$nroCoches*90;
    echo "El total a pagar por $nroCoches coches es: $pagar";
}
costo_hotel3();
?>
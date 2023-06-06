<?php
$temperaturas=array("lunes"=>9.95,"martes"=>15.25,"miercoles"=>7.85);
//var_dump($temperaturas);
$temperaturas["jueves"]=9.99; //añade al final del array estos valores, 'PUT'
var_dump($temperaturas);


//el martes la temperatura es de 12 grados
$temperaturas["martes"]=12; //SETTER


foreach ($temperaturas as $temperatura){ //para sacar solo los valores numericos
    echo ($temperatura);
    echo("<br>");
}


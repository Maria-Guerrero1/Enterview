<?php

$host = "localhost";    // sera el valor de nuestra BD 
$user = 'root';
$password = '1234';
$db = 'Entrevista';

//Lista de Tablas
$tabla_db1 = "Bloques"; 	   // tabla de usuarios
$tabla_db2 = "Entrevistas";
$tabla_db3 = "GradoEstudios";
$tabla_db4 = "Preguntas";
$tabla_db5 = "Respuestas";
$tabla_db6 = "Roles";
$tabla_db7= "Solicitante";
$tabla_db8= "TipoPregunta";
$tabla_db9= "Usuarios";
$tabla_db10= "Vacantes";





//error_reporting(0); //No me muestra errores

$conection = new mysqli($host,$user,$password,$db);



if ($conection->connect_errno) {
    echo "Nuestro sitio experimenta fallos....";
    exit();
}

printf("servidor informacion:conectado %s\n ", $mysqli->server_info);
?>

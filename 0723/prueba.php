<?php

define("SERVIDOR","127.0.0.1");
define("USUARIO","root");
define("PASSWORD","");
define("DB","Usuarios");
define("PORT","3306");

$servidor="mysql:host=".SERVIDOR.";dbname=".DB.";port=".PORT;
global $pdo;
    try {
        $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
        // echo "<Script>alert('Conectado ... ')</Script>";
    } catch(\Exception $e ) {   
        echo "<Script>alert('Error ... ')</Script>";exit;
};


include 'usuario.php';
include 'celular.php';
include 'habilidad.php';

$celular1 = new Celular('Samsung','S9','Movistar','3413090026');
$celular2 = new Celular('Apple','iphone','Personal','3413090022');
$celular3 = new Celular('Apple','iphone','Claro','3413092222');
$celular4 = new Celular('motorola','E3','Movistar','3413091122');

$habilidad1 = new Habilidad('Correr',2);
$habilidad2 = new Habilidad('Leer',1);
$habilidad3 = new Habilidad('Basquet',5);
$habilidad4 = new Habilidad('Apostador',3);
$habilidad5 = new Habilidad('Programador',3);
$habilidad6 = new Habilidad('Diseñador',3);

$user1 = new Usuario('Juan','juan@dh.com','12345',$celular1,[$habilidad1,$habilidad2,$habilidad3]);
$user2 = new Usuario('Leo','leo@dh.com','12345',$celular2,[$habilidad4,$habilidad3]);
$user3 = new Usuario('pedro','leo@dh.com','12345',$celular2,[$habilidad6,$habilidad4,$habilidad3]);
$user4 = new Usuario('Ivana','leo@dh.com','12345',$celular2,[$habilidad5,$habilidad6]);

$ListadoUsuarios=[];

var_dump($user1);
var_dump($user2);
var_dump($user3);
var_dump($user4);

echo "<hr>";
echo "Ejercicio 10"."<br>";
$user2->Saludar();

echo "<hr>";
echo "Ejercicio 18"."<br>";
$user1->mostrarTelefono();
echo "<br>";
$user2->mostrarTelefono(); 

echo "<hr>";
echo "Ejercicio 19"."<br>";
$user2->llamar($user1,600); 

echo "<hr>";
echo "Ejercicio 23"."<br>";
$user1->saberHacer('Correr',1);

echo "<hr>";
echo "Ejercicio 25"."<br>";

$user1->guardar();

echo "<hr>";
echo "Ejercicio 26"."<br>";

$user1->listadoUsuarios();
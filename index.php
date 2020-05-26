<?php

require_once("config.php");

//Carrega um unico usuario
//$data = new Usuario();
//$data->loadById(2);
//echo $data;


//CARREGA UMA LISTA DE USUARIOS
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios pelo login
//$search = Usuario::search("us");
//echo json_encode($search);

//Carrega um usuario usando o login e senha
$usuario = new Usuario();
$usuario->login("claudiom","123456");
echo $usuario;


?>

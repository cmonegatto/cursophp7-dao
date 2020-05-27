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
//$usuario = new Usuario();
//$usuario->login("claudiom","123456");
//echo $usuario;

//criando um novo usuario
//$aluno = new Usuario("jorgep", "200%Oracle");
//$aluno->insert();
//echo $aluno;


// Atualizando um registro
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("professor", "novaSenha");
//echo $usuario;


$usuario = new Usuario();

$usuario->loadById(8);

$usuario->delete();

echo $usuario;


?>

<?php

require_once("config.php");

/*$root = new Usuario();

$root->loadbyId(3);

echo $root;*/

// Carregando uma lista de usuários
//$lista = Usuario ::getList();

// Carregando uma lista de usuários buscando pelo login

//$search= Usuario ::search("d");
//echo json_encode($search);

//Carregando um usuário usando login e senha

$usuario = new Usuario();
$usuario->login("Daniel","23456");

echo $usuario;

?>
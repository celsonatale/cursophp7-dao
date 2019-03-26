<?php

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega lista de usuários
//$lista = Usuario::getlist();
//echo json_encode($lista)."<br>";

//carrega um usuario usando o login e a senha

$usuario = new Usuario();
$usuario->login("root", "@!@");

echo $usuario;

?>
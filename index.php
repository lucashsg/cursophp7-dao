<?php

require_once "config.php";

// Carrega um usuário
// $root = new Usuario();
// $root->loadById(3);

// Carrega uma lista de usuarios
//$lista = Usuario::getList();

// Carrega uma lista de usuarios buscando pelo login
// $search = Usuario::search("Lucas");
// echo json_encode($search);

// Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("llucas", "12345");

echo $usuario;

?>
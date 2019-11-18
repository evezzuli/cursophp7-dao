<?php

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);

//Carrega unm usuario
//$root = new Usuario();
//$root->loadById(3); //método criado no arquivo/classe Sql
//echo $root;


//Carrega uma lista de usuarios
//$lista = Usuario::getList();//como o método na classe Sql é "static", não preciso instanciar a classeSql, basta chamá-la diretamente.

//Carrega uma lista de Usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um Usuário usando o login e a senha
$usuario =new Usuario();
$usuario->login("root", "!@#$");

echo $usuario;

?>
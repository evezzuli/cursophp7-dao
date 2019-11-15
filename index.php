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
$lista = Usuario::getList();//como o método na classe Sql é "static", não preciso instanciar a classeSql, basta chamá-la diretamente.

echo json_encode($lista);
?>
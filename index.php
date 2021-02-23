<?php 

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(2);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("fe");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("user", "12345");

//echo $usuario;

/*Criando um novo usuário
$aluno = new Usuario("aluna", "@lun0");

$aluno->insert();

echo $aluno;
*/

/*Alterar um usuário
$usuario = new Usuario();

$usuario->loadbyId(9);

$usuario->update("professor", "357951");

echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadbyId(7);

$usuario->delete();

echo $usuario;

 ?>
<?php 

require_once("config.php");
 
// carrega somente um usuario
//$root = new Usuario();

//$root->loadbyId(3);

//echo $root;

//carrega uma lista de usuario 

//$lista = Usuario::getlist();

//echo json_encode($lista)

// carrega uma lista buscando pelo login

//$search = Usuario::search("e");

//echo json_encode($search);

// clientes conectados

//$usuario = new Usuario();
//$usuario->login("6ptelecom","laranja");

//echo $usuario;

//inserindo um usuario

/*$aluno = new Usuario();

$aluno->setDeslogin("6ptelecom2");
$aluno->setDessenha("setup12534o");

$aluno->insert();

echo $aluno;
*/

//atualizando usuario

/*$usuario = new Usuario();

$usuario->loadbyId(7);

$usuario->update("elvis", "786234");

echo $usuario;
*/

//deletando usuario

$usuario = new Usuario();

$usuario->loadbyId(9);

$usuario->delete();

echo $usuario;
  
   ?>
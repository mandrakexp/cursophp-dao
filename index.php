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

$usuario = new Usuario();
$usuario->login("mandrakexp","batata");

echo $usuario;

  
   ?>
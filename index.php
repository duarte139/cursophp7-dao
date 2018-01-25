	<?php 


	require_once("config.php");

    
	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

    //$root->loadById(5);

    //carrega um usuario
	//$root = new Usuario();
	//echo $root;
    
    //carrega uma lista de usuario

    $lista = Usuario::getList();
    echo json_encode($lista);

    //carrega lista usuarios pelo login
    
   // $search = Usuario::search("cd");
    //echo json_encode($search);

    //carrega um usuario usando o login e a senha

   // $usuario = new Usuario();
   //$usuario->login("Vinicios", "12347");
   // echo $usuario;


	 ?>
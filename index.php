	<?php 


	require_once("config.php");

	$root = new Usuario();


	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
    
    $root->loadById(3);
	echo $root;




	 ?>
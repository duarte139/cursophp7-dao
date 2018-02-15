  	<?php 


      	require_once("config.php");

        

        //carrega um usuario esta funcionando

    	$root = new Usuario();
      $root->loadById(5);
    	print $root;
        
        //carrega uma lista de usuario funcionando

        //$lista = Usuario::getList();
        //echo json_encode($lista);

        //carrega lista usuarios pelo login funcionando
        
        //$search = Usuario::search("cd");
        //echo json_encode($search);

        //carrega um usuario usando o login e a senha funcionando

        //$usuario = new Usuario();
      //$usuario->login("Vinicios", "1234");
        //echo $usuario;

      //comando insert não funcionando arrumar

      //$aluno = new Usuario();
      //$aluno->setDeslogin("aluno");
      //$aluno->setDessenha("@lun0");
      //$aluno->insert();
      //echo $aluno;

      //Update esta funcionando
      //$usuario = new Usuario();
      //$usuario->loadById(3);
      //$usuario->update("professor", "pipi");

     // echo $usuario;


      //comando para deletar funcionando

     // $usuario = new Usuario();
     // $usuario->loadById(3);
     // $usuario->delete();

      //echo $usuario;


     // $sql = new Sql();
     // $usu = $sql->select("SELECT *FROM tb_usuarios");
     // echo json_encode ($usu);



  	 ?>
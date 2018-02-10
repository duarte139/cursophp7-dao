		<?php

		class Usuario{


		    private $idusuario;
			private $deslogin;
			private $dessenha;
			private $dtcadastro;

			public function getIdusuario(){
			return $this->idusuario;
		}
		public function setIdusuario($value){
		  $this->idusuario = $value;
		}
		public function getDeslogin(){
			return $this->deslogin;
		}
		public function setDeslogin($value){
		  $this->deslogin = $value;
		}
		public function getDessenha(){
			return $this->dessenha;
		}
		public function setDessenha($value){
		  $this->dessenha = $value;
		}

		public function getDtcadastro(){
			return $this->dtcadastro;
		}
		public function setDtcadastro($value){
		  $this->dtcadastro = $value;
		}
		public function loadById($id){
          $sql = new Sql();
          $resul = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",array(":ID"=>$id));
		

		if(count($resul) > 0){
			$row = $resul[0];

			$this->setData($resul[0]);
		  

		}
	}

	  public static function search($login){
	  	$sql = new Sql();
	  return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array( 
         ':SEARCH'=>"%".$login."%",

	  	));
	  }

	  public function login($login, $password){
      
      $sql = new Sql();
          $resul = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD",array(":LOGIN"=>$login, "PASSWORD"=>$password));
		

		if(count($resul) > 0){
			$row = $resul[0];

			$this->setData($resul[0]);
		 
		}else{
			throw new Exception("Houve um erro", 400);
		}
			  
		

	  }


       public static function getList(){
       	$sql = new Sql();
       return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
       }

       public function setData($data){

   	  $this->setIdusuario($data['idusuario']);
      $this->setDeslogin($data['deslogin']);
      $this->setDessenha($data['dessenha']);
      $this->setDtcadastro(new DateTime($data['dtcadastro']));


       }


       public function insert(){
       	$sql = new Sql();
       	$resul = $sql->select("CALL_sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
       		':LOGIN'=>$this->getDeslogin(),
       		':PASSWORD'=>$this->getDessenha()

       		));

       	   if(count($resul) > 0){
       	   	$this->setData($resul[0]);
       	   }
       }

       
		public function __toString(){

		return json_encode(array(
			
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")


			));



			
	}

	public function update($login, $password){
		$this->setDeslogin($login);
		$this->setDessenha($password);
		$sql = new Sql();
		$sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
		':LOGIN'=>$this->getDeslogin(),
		':PASSWORD'=>$this->getDessenha(),
		':ID'=>$this->getIdusuario()
		));
	}

	public function delete(){

		$sql = new Sql();
		$sql->query("DELETE from tb_usuarios WHERE idusuario = :ID ", ARRAY(

         ':ID'=>$this->getIdusuario()


			));
             $this->setIdusuario(0);
             $this->setDeslogin("");
             $this->setDessenha("");
             $this->setDtcadastro(new DateTime());



	}

		}



		?>
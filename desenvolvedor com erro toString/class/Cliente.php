	<?php
				class Cliente{
				    private $codCli;
					private $nomeCli;
					private $logradouroCli;
					private $bairroCli;
	                private $cidadeCli;
					private $ufCli;
					private $telresCli;
					private $telcelCli;
	                private $emailCli;
					


	            public function getCodCli(){
			    return $this->codcli;
				}
				public function setCodCli($value){
				  $this->codcli = $value;
				}


				public function getNomeCli(){
					return $this->nomeCli;
				}
				public function setNomeCli($value){
				  $this->nomeCli = $value;
				}



				public function getLogradouroCli(){
					return $this->logradouroCli;
				}
				public function setLogradouroCli($value){
				  $this->logradouroCli = $value;
				}



				public function getBairroCli(){
					return $this->bairroCli;
				}
				public function setBairroCli($value){
				  $this->bairroCli = $value;
				}



	                        public function getCidadeCli(){
	                               return $this->cidadeCli;     
	                        }

	                        public function setCidadeCli($value){
	                               $this->cidadeCli = $value;    
	                        }


	                           

	                        public function getUfCli(){
	                               return $this->ufCli;     
	                        }

	                        public function setUFCli($value){
	                               $this->ufCli = $value;    
	                        }


	                         

	                       public function getTelresCli(){
					return $this->telresCli;
				}
				public function setTelresCli($value){
				  $this->telresCli = $value;
				}




	                       public function getTelCelCli(){
	                               return $this->telcelCli;     
	                        }

	                        public function setTelCelCli($value){
	                               $this->telcelCli = $value;    
	                        }




	                        public function getEmailCli(){
			         return $this->emailCli;
				}
				public function setEmailCli($value){
				  $this->emailCli = $value;
				}



	                       
	                        
				//metodo que faz uma select pelo id do usuario
				//objetivo carregar toda informaçao no objeto loadById para mostrar as informações tem criar outro metodo seria o to_String metodo magico ou __constructor ou seja atributos todos preenchidos.



					public function loadById($cod){
						//instanciar a classe Sql classe de conexao com o banco
			         $sql = new Sql();
			         $resul = $sql->select("SELECT * FROM cliente WHERE codCli = :COD",array(
			         	":COD"=>$cod));
					
					if(count($resul) > 0){
						$row = $resul[0];

		          $this->setCodCli($row['codCli']);
			      $this->setNomeCli($row['nomeCli']);
			      $this->setLogradouroCli($row['logradouroCli']);
			      $this->setBairroCli($row['bairroCli']);
		          $this->setCidadeCli($row['cidadeCli']);
			      $this->setUfCli($row['ufCli']);
			      $this->setTelresCli($row['telresCli']);
			      $this->setTelCelCli($row['telcelCli']);
		          $this->setEmailCli($row['emailCli']);
					}
				}



				public function  __toString(){
				return json_encode(array(
						           
		        "codCli"=>$this->getCodCli(),
			    "nomeCli"=>$this->getNomeCli(),
			    "logradouroCli"=>$this->getLogradouroCli(),
			    "bairroCli"=>$this->getBairroCli(),
		        "cidadeCli"=>$this->getCidadeCli(),
			    "ufCli"=>$this->getUfCli(),
			    "telresCli"=>$this->getTelresCli(),
			    "telcelCli"=>$this->getTelCelCli(),
		        "emailCli"=>$this->getEmailCli()
						));
			
			}

		}

			?>
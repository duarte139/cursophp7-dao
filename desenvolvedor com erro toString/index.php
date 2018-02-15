	<?php 
	      	require_once("config.php");
	        
	        //carrega um usuario esta funcionando
	    $cliente = new Cliente();
        $cliente->loadById(2);
    	echo $cliente;

	    	?>
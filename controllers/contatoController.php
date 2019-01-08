<?php

class contatoController extends controller{
    
      // construct paRA CHAMAR banco de dados 
    public function __construct (){

    	parent::__construct();

// essa pagina precisa estar logado para acessar 
//$u = new Usuarios();
//    	$u->verificarLogin();
    
    	 
    }

    public function index(){
        $dados = array();
        
        
       
           
            
           
            
        
        
     

        $this->loadTemplate('contato', $dados);
    }
}


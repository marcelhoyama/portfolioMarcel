<?php

class clientes extends model{
    
    
    
    public function cadastrarInteressado($nome,$celular, $email,$mensagem) {
        
        $sql="INSERT INTO clientes SET nome_clientes=:nome, email_clientes=:email, celular_clientes=:celular, mensagem_clientes=:mensagem";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":nome",$nome);
        $sql->bindValue(":email",$email);
        $sql->bindValue(":celular",$celular);
        $sql->bindValue(":mensagem",$mensagem);
        $sql->execute();
        if($sql->rowCount() >0){
            
            return true;
        }
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}



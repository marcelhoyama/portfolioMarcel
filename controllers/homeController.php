<?php

class homeController extends controller {

    // construct paRA CHAMAR banco de dados 
    public function __construct() {



// essa pagina precisa estar logado para acessar 
//$u = new Usuarios();
//    	$u->verificarLogin();
    }

    public function index() {
        $dados = array();






        if (isset($_POST['nome']) && !empty($_POST['nome']) || isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['celular']) && !empty($_POST['celular']) || isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
$c=new clientes();

$nome= addslashes(trim($_POST['nome']));
$email= addslashes(trim($_POST['email']));
$celular= addslashes(trim($_POST['celular']));
$mensagem= addslashes(trim($_POST['mensagem']));


            $para = "suporte@buscadorcabreuva.com.br";
            $assunto = " Contato pelo site portfolio Marcel Hoyama";
            $corpo = "Nome do interessado: " . $nome . "</br>"
                    . "-Celular: " . $celular . "</br>"
                    . "- Email do interessado: " . $email . "</br>"
                    . "-Tipo de Assunto: Prestação de Serviços </br>"
                    . "-Mensagem: " . $mensagem;
            $cabecalho = "From:" . $email . "\r\n" .
                    "Reply-To:" . $email . "\r\n" .
                    "X-Mailer: PHP/" . phpversion();
            mail($para, $assunto, $corpo, $cabecalho);
            if ($c->cadastrarInteressado($nome, $celular, $email, $mensagem) == TRUE) {

                $dados['ok'] = "Enviado com sucesso";
            } else {
                $dados['erro'] = "Não foi possivel enviar, tente novamente";
            }
        }








        $this->loadTemplate('home', $dados);
    }

}

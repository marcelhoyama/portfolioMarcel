<!-- Esse template = design (estilo) da maioria das paginas -->
<!DOCTYPE html> <!-- para usufruir do html5 -->
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->


            <!-- Bootstrap -->
              <link href="assets/css/bootstrap.min.css" rel="stylesheet">
              <script src="assets/js/jquery-3.1.1.min.js"> </script>
              <script src="assets/js/bootstrap.min.js"></script>
              <link href="assets/css/form_inicial.css" rel="stylesheet" type="text/css" />

    </head>
  

  <body>
      <title>Home</title>
<nav class="navbar navbar-inverse">
 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
        </button>
      <a class=" navbar-brand" href="http://www.marecrispc.blogspot.com.br/">BLOG</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li ><a href="home">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="contato.php">Contatos</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="login"></a></li>
            </ul>
    </div><!-- /.navbar-collapse -->
 
</nav>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="assets/img/foto 1.jpg" alt="tcc" width="680" height="345">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
        <img src="assets/img/foto 2.jpg" alt="tcc" width="680" height="345">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
        <img src="assets/img/foto 3.jpg" alt="tcc" width="680" height="345">
      <div class="carousel-caption">
        
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <hr>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="salgadosakio" src="assets/img/akionovo.png" />
						<div class="caption">
							<h3>
							Akio - Pastéis e Salgados Site em Construção -tipo informativo
							</h3>
							<p>
							Nova cara, novo layout, sendo feitas com ferramentas atuais e com meus estudos, pesquisas e dedicação.
                                                        </p>
								<a class="btn btn-primary" href="../akioSalgados/home">Visitar</a> 
							
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="salgadosakio" src="assets/img/akiosalgadossite.png" />
						<div class="caption">
							<h3>
								Akio Salgados - Site Oficial deles - Sou novo administrador do site
							</h3>
							<p>
                                                        Esse site precisa de flashplayer já esta no ar, ficou desatualizado, ferramentas obsoleto onde nao pode usar PHP, CSS, JS.    
							Com a nova administração, esta sendo feito atualização, manuntenção e modificações onde for possivel. 
                                                        </p>
								<a class="btn btn-primary" href="http://www.salgadosakio.com.br" >Visitar</a>
							
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="tcc" src="assets/img/sisnutri.jpg" />
						<div class="caption">
							<h3>
								TCC - projeto - Sistema Web para Clinica de Nutrição
							</h3>
							<p>Esta sendo feito melhorias, conforme meus estudos, pesquisas, testes e dedicação.</p>
							<p>No sistema Web temos:</p>
                                                        <p>*Cadastro de paciente;</p>
                                                        <p>*Cadastro de Usuario;</p>
                                                        <p>*Cadastro de Alimentos Substitutivos;</p>
                                                        <p>*Cadastro de Agendamento; </p>
                                                        <p>*Calculo de Macronutrientes;</p>
                                                        <p>*Calculo de IMC;<br/></p>
                                                        <p>Regras de negocios:</p>
                                                        <p>*login;</p>
                                                        <p>*esqueceu senha; (Mas falta estar na hospedagem para usufruir dele)</p>
                                                        <p>*cadastrar para acessar;</p>

							<a class="btn btn-primary" href="<?php BASE_URL ?>login">Visitar</a> 
							
						</div>
					</div>
				</div>
                            
                            <div class="col-md-4">
					<div class="thumbnail">
						<img alt="sidcellinformatica" src="assets/img/sidcell.png" />
						<div class="caption">
							<h3>
								SIDCELL Informática - Em construção
							</h3>
							<p>
                                                       Site está no ar recentemente, ainda em construção. Site informativo próprio junto com meu amigo Sidnei Gonçalves, onde divulgo meus serviços de freelancer e faço em horas vagas.  </p>
								<a class="btn btn-primary" href="http://www.sidcellinformatica.com.br" >Visitar</a>
							
						</div>
					</div>
				</div>
                            
                             <div class="col-md-4">
					<div class="thumbnail">
						<img alt="cdi" src="assets/img/cdi.png" />
						<div class="caption">
							<h3>
								CDI - Centro Digital Informatica
							</h3>
							<p>
                                                            Site informativo em construção </p>
                                                       	<a class="btn btn-primary" href="../centrodigital/index.php" >Visitar</a>
							
						</div>
					</div>
				</div>
                            
                             <div class="col-md-4">
					<div class="thumbnail">
						<img alt="blogmarecrispc" src="assets/img/" />
						<div class="caption">
							<h3>
								
							</h3>
							<p>
                                                       	<a class="btn btn-primary" href="#" >Visitar</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



</body>
 <div class="footer panel-footer ">
     <center>  Portfólio 2016 - Desenvolvido por MARCEL HOYAMA </center>
     
 </div>
</html>
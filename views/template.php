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
              
   <!-- Etiqueta global do site (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122517452-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122517452-1');
</script>
    </head>
  

  <body>
      <nav class="navbar navbar-inverse">
 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
        </button>
      <a class=" navbar-brand" href="http://www.tecnicoinformaticacabreuva.blogspot.com.br/">BLOG</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li ><a href="home">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="contato">Contatos</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="login"></a></li>
            </ul>
    </div><!-- /.navbar-collapse -->
 
</nav>


        <!--  aqui onde vai o corpo das paginas do sistema -->
    <?php  $this->loadViewInTemplate($viewName, $viewData); ?>


</body>
 <div class="footer panel-footer ">
     <center>  Portfólio 2016 - Desenvolvido por MARCEL HOYAMA </center>
     
 </div>
</html>
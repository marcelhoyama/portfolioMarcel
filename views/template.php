<!-- Esse template = design (estilo) da maioria das paginas -->
<!DOCTYPE html> <!-- para usufruir do html5 -->
<html lang="pt-br">
    <head>
     
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->


            <!-- Bootstrap -->
               <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
           <link href="assets/css/freelancer.min.css" rel="stylesheet" type="text/css" />
              <link href="assets/css/form_inicial.css" rel="stylesheet" type="text/css" />
              <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">
              
   <!-- Etiqueta global do site (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122517452-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122517452-1');
</script>
    </head>
  

  <body id="page-top">
<!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Marcel Hoyama</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Sobre Mim</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar  mb-5" src="assets/img/portfolio/perfil-photo.jpg" alt="marcel hoyama">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">Marcel Hoyama</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Técnico de Informática - Web Developer - Educador</p>

    </div>
  </header>
        <!--  aqui onde vai o corpo das paginas do sistema -->
    <?php  $this->loadViewInTemplate($viewName, $viewData); ?>

    <script src="assets/js/jquery-3.1.1.min.js"> </script>
              <script src="assets/js/bootstrap.min.js"></script>
  
   <!-- Bootstrap core JavaScript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="assets/js/freelancer.min.js"></script>
  </body>
  
   <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Escritório</h4>
          <p class="lead mb-0">Rua Fernando Nunes, 793
            <br>Jacaré - Cabreúva/SP</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Redes Sociais</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/marcel.hoyama">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/marcelhoyama/?hl=pt-br">
            <i class="fab fa-fw fa-instagram"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/marcel-hoyama-475b9b26/">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="https://buscadorcabreuva.com.br/home_1">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">About Freelancer</h4>
          <p class="lead mb-0">Freelance is a free to use, MIT licensed Bootstrap theme created by
            <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Portfólio 2016 - MARCEL HOYAMA</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

</html>
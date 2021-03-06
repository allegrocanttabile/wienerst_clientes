<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clientes - WienersTech S.A.C</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container-fluid">

      <img src="img/logo01.png" class="navbar-brand js-scroll-trigger" width="250" height="85" >



      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contáctanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://clientes.wienerstech.com/">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">


        <?php


include ("conexion.php");

$search = $_POST['dni'];

$conecta = mysqli_connect( $db_host, $db_user, $db_password);

if (mysqli_connect_errno()) {
  echo "error al conectar con el servidor";
  exit();
}

mysqli_select_db($conecta, $db_name)or die('error al conectar con la base de datos');

mysqli_set_charset($conecta, 'utf8' );

$query = "select * from customers inner join gift_cards on customers.id = gift_cards.customer_id where phone_number like '$search%'";

$resultado = mysqli_query($conecta, $query);

while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

   echo "<div class='col-lg-10 align-self-end'>";
   echo "<h1 class='text-uppercase text-white font-weight-bold'>".'felicitaciones!!!'."</h1>";
   echo "<hr class='divider my-4'>";
   echo "</div>";


   echo "<div class='col-lg-10 align-self-end'>";
   echo "<h1 class='text-uppercase text-white font-weight-bold'>".$fila['name']."</h1>";
   echo "<hr class='divider my-4'>";
   echo "</div>";

   echo "<div class='col-lg-10 align-self-end'>";
   echo "<h1 class='text-uppercase text-white font-weight-bold'>".'Usted tiene'."</h1>";
   echo "<hr class='divider my-4'>";
   echo "</div>";


    echo "<div class='col-lg-10 align-self-end'>";
   echo "<h1 class='text-uppercase text-white font-weight-bold'>".$fila['amount']."</h1>";
   echo "<h1 class='text-uppercase text-white font-weight-bold'>".'Puntos Acumulados'."</h1>";
   echo "<hr class='divider my-4'>";
   echo "</div>";








  echo "<br>";
}

mysqli_close($conecta);

?>

        <div class="col-lg-8 align-self-baseline">
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="http://www.wienerstech.com/">Visite Nuestra Web</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">We've got what you need!</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
        </div>
      </div>
    </div>
  </section>
-->

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Contáctenos!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Somos Empresa Importadora Mayorista con oficinas propia en Miami, California y La Molina.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>996672111</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSKjgGkrWWQNJjfcHLnqHsMnBKbjhNdCtZSfPhKmxRVvPFcQfSdNVgpKPMXTDNbPMpCKSgSM">wienerstech1107@gmail.com</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - WienersTech S.A.C</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="364016820465917"
  logged_in_greeting="hola! En que te puedo ayudar Hoy?"
  logged_out_greeting="hola! En que te puedo ayudar Hoy?">
</div>

</html>

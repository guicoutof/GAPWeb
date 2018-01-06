<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <link rel="icon" href="assets/img/heart.png" type="image/gif" sizes="16x16">
  <title>GAP Med</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?= base_url("assets/css/style.css")?>"  type="text/css">



 
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#home">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php base_url('index.php')?>">GM</a>
    </div>
    <div class="collapse navbar-collapse" id="myPage">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home">INICIO</a></li>
        <li><a href="#about">SOBRE</a></li>
        <li><a href="#contact">CONTATO</a></li>
        <li><a href="<?php echo base_url('index.php/login') ?>">ENTRAR</a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- Parallax of home -->
<div id="home" class="parallax" >
  <h1>Gerenciador de Acompanhamento<br>de Pacientes</h1>
    
</div>

<!-- Container About -->
<div id="about" class="container text-center">
  <h3>GAP MED</h3>
  <p><em>Gerenciador de Acompanhamento de Pacientes</em></p>
  <p>Consiste em acompanhar o paciente no cotidiano pós-consulta,cirurgia ou demais cuidados. O sistema auxiliará no dia a dia do passiente pois o tal poderá constantemente consultar suas prescrições médicas, medicamentos e observações que o médico lhe prescreveu e também, poderá haver atualizações constantes dos médicos cadastrados.</p>
  <br>
  
</div>
  

<!-- Container (Contact Section) -->
<div id="contact" class="blackcontainer">
  <h3 class="text-center">Contato</h3>
  <p class="text-center"><em>We care!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p> Fale conosco</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Presidente Prudente, Br</p>
      <p><span class="glyphicon glyphicon-phone"></span> Phone: +55 14 996903532</p>
      <p><span class="glyphicon glyphicon-envelope"></span> Email: guicoutof@gmail.com</p>
    </div>
    <!-- inputs -->
    <div class="col-md-8">
      <form  method="post" action="<?= base_url('Welcome/EnviarEmail')?>">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Mensagem" rows="5"></textarea>
        <br>
        <div class="row">
          <div class="col-md-12 form-group">
            <button class="btn pull-right" type="submit">Enviar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <br>
</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#home" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#home']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>


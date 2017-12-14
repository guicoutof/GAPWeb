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
  <link rel="stylesheet" href="<?= base_url("assets/css/patientstyle.css")?>"  type="text/css">
</head>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">PRESCRICAO</a></li>
        <li><a href="#contact">PERFIL</a></li>
        <li><a href="#login">SAIR</a></li>
      </ul>
    </div>
  </div>
</nav>



<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h1 class="text-center">PRESCRICAO</h1>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>

    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="nome" name="nome" placeholder="Nome" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 form-group">
            <input class="form-control" id="senha" name="senha" placeholder="Senha" type="Senha" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="cpf" name="cpf" placeholder="CPF" type="CPF" required>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-12 form-group">
            <input class="form-control" id="endereco" name="endereco" placeholder="Endereco" type="Endereco" required>
          </div> 
      </div>
      <div class="row">
        <div class="col-sm-6 form-group">
            <input class="form-control" id="cidade" name="cidade" placeholder="Cidade" type="Cidade" required>
          </div>
          <div class="col-sm-2 form-group">
            <input class="form-control" id="estado" name="estado" placeholder="Estado" type="Estado" required>
          </div> 
      </div>

    </div>
  </div>
  <br>

  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
  </table>
</div>

<div id="perfil" class="container">
<h1 class="text-center">Alterar Informações</h1>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>

    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="nome" name="nome" placeholder="Nome" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 form-group">
            <input class="form-control" id="senha" name="senha" placeholder="Senha" type="Senha" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="cpf" name="cpf" placeholder="CPF" type="CPF" required>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-12 form-group">
            <input class="form-control" id="endereco" name="endereco" placeholder="Endereco" type="Endereco" required>
          </div> 
      </div>
      <div class="row">
        <div class="col-sm-6 form-group">
            <input class="form-control" id="cidade" name="cidade" placeholder="Cidade" type="Cidade" required>
          </div>
          <div class="col-sm-2 form-group">
            <input class="form-control" id="estado" name="estado" placeholder="Estado" type="Estado" required>
          </div> 
      </div>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Salvar</button>
        </div>
      </div>
    </div>
  </div>
  <br>



</div>



<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

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

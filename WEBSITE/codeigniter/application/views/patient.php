<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="icon" href="<?= base_url("assets/img/heart.png")?>" type="image/gif" sizes="16x16">
  <title>GAP Med</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?= base_url("assets/css/patientstyle.css")?>"  type="text/css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.16/af-2.2.2/r-2.2.1/datatables.min.css"/> 
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/af-2.2.2/r-2.2.1/datatables.min.js"></script>

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
      <a class="navbar-brand" href="#myPage">GM</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right" id="myNavbar">
        <li><a href="#home" aria-controls="home" role="tab" data-toggle="tab">PRESCRICAO</a></li>
        <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">PERFIL</a></li>
        <li><a href="<?php echo base_url('index.php/Logout') ?>">SAIR</a></li>
      </ul>
    </div>
  </div>
</nav>



<!-- Container (Contact Section) -->

  <div class="tab-content">
    <!-- TAB 1 HOME -->

    <div role="tabpanel" class="tab-pane active" id="home">
      <div class="container">
      <h1 class="text-center">PRESCRICAO</h1>
      <div class="row">
          <div class="col-md-4">
            <span class="glyphicon glyphicon-edit"></span>
          </div>
          <form  method="post" action="<?= base_url()?>Prescritions/buscar">
            <div class="col-md-8">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="prescricaocpf" name="prescricaocpf" placeholder="CPF Paciente" type="text" required>
                </div>
                  <div class="col-sm-6 form-group">
                    <input class="form-control" id="prescricaocrm" name="prescricaocrm" placeholder="CRM Medico" type="text" required>
                  </div>
              </div>
              <div class="row">
                <div class="col-sm-12 form-group">
                  <textarea class="form-control" rows="5" id="prescricaodescricao" name="prescricaodescricao" placeholder="Descrição"></textarea>
                </div>
              </div>
            </div>
          </form>
        </div><!-- row -->
      <br>
    

        <table id="tabela2" class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Descrição</th>
            <th scope="col">ID_Medico</th>
            <th scope="col">ID_Paciente</th>
            <th scope="col">Anexo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
        </tbody>
        </table>

        <div class="row">
          <div class="col-md-4">
            <span class="glyphicon glyphicon-adjust"></span>
          </div>

          <div class="col-md-8">
            <form  method="post" action="<?= base_url()?>Recipe/adicionar">
              <div class="row">
                <div class="col-sm-12 form-group">
                  <input class="form-control" id="medicamento" name="medicamento" placeholder="Medicamento" type="text" required>
                </div>
                
              </div>
              <div class="row">
                <div class="col-sm-4 form-group">
                  <input class="form-control" id="qtdpordia" name="qtdpordia" placeholder="Quantidade x por dia" type="number" required>
                </div>
                <div class="col-sm-4 form-group">
                    <input class="form-control" id="qtdprazo" name="qtdprazo" placeholder="Quantidade de dias" type="number" required>
                  </div>

              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                    <textarea class="form-control" rows="5" id="anotacao" placeholder="Anotação"></textarea>
                  </div>
              </div>
            </form>
          </div>
        </div>
        <br>
      </div>
      </div><!-- tab -->


    <!--  TAB 2 PROFILE-->
  <div role="tabpanel" class="tab-pane" id="profile">
      <div class="container">
      <h1 class="text-center">Alterar Informações</h1>

        <div class="row">
          <div class="col-md-4">
            <span class="glyphicon glyphicon-cog"></span>
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
                <input class="form-control" id="senha" name="senha" placeholder="Senha" type="password" required>
              </div>
              <div class="col-sm-6 form-group">
                  <input class="form-control" id="confsenha" name="confsenha" placeholder="Confirmar Senha" type="password" required>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="cpf" name="cpf" placeholder="CPF" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                  <input class="form-control" id="pacientetelefone" name="pacientetelefone" placeholder="Telefone" type="text" required>
                </div>  
            </div>
            <div class="row">
              <div class="col-sm-12 form-group">
                <input class="form-control" id="endereco" name="endereco" placeholder="Endereco" type="text" required>
              </div> 
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="cidade" name="cidade" placeholder="Cidade" type="text" required>
              </div>
              <div class="col-sm-2 form-group">
                <input class="form-control" id="estado" name="estado" placeholder="Estado" type="text" required>
              </div> 
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <button class="btn pull-right" type="submit">Salvar</button>
              </div> <!-- form --><!-- group -->
            </div><!-- row -->
          </div>  <!-- cold m 8 -->
        </div><!-- row -->
        <br> 
      </div>
    </div><!--  tab 2 -->
  </div><!-- tab geral -->
 <!-- container -->
  

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
</footer>

<script>
$(document).ready(function(){
  Initialize Tooltip
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
});


  $('#myNavbar a[href="#home"]').tab('show');
  $('#myNavbar a[href="#profile"]').tab('show');


$(document).ready(function() {
    $('#tabela2').DataTable();
} );

</script>

</body>
</html>

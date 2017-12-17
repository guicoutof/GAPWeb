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
  <link rel="stylesheet" href="<?= base_url("assets/css/doctorstyle.css")?>"  type="text/css">
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
        <li><a href="#home" aria-controls="home" role="tab" data-toggle="tab">CADASTRAR PACIENTE</a></li>
        <li><a href="#prescrition" aria-controls="prescrition" role="tab" data-toggle="tab">ADICIONAR PRESCRICAO</a></li>
        <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">ALTERAR PERFIL</a></li>
        <li><a href="<?php echo base_url('index.php/Logout') ?>">SAIR</a></li>
      </ul>
    </div>
  </div>
</nav>



  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
    
      <!-- PACIENTE -->
      <div class="container">
        <h1 class="text-center">Cadastrar Paciente</h1>

        <div class="row">
          <div class="col-md-4">
            <span class="glyphicon glyphicon-user"></span>
          </div>
          <form  method="post" action="<?= base_url()?>Patients/adicionar">
          <div class="col-md-8">
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="pacientenome" name="pacientenome" placeholder="Nome" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <input class="form-control" id="pacienteemail" name="pacienteemail" placeholder="Email" type="email" required>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                  <input class="form-control" id="pacientesenha" name="pacientesenha" placeholder="Senha" type="password" required>
                </div>
              <div class="col-sm-6 form-group">
                  <input class="form-control" id="pacienteconfsenha" name="pacienteconfsenha" placeholder="Confirmar Senha" type="password" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="pacientecpf" name="pacientecpf" placeholder="CPF" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="pacientetelefone" name="pacientetelefone" placeholder="Telefone" type="text" required>
                </div>  
            </div>
            <div class="row">
              <div class="col-sm-12 form-group">
                  <input class="form-control" id="pacienteendereco" name="pacienteendereco" placeholder="Endereco" type="text" required>
                </div> 
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                  <input class="form-control" id="pacientecidade" name="pacientecidade" placeholder="Cidade" type="text" required>
                </div>
                <div class="col-sm-2 form-group">
                  <input class="form-control" id="pacienteestado" name="pacienteestado" placeholder="Estado" type="text" required>
                </div>
                <div class="col-sm-4 form-group">
                  <input class="form-control" id="pacientepais" name="pacientepais" placeholder="Pais" type="text" required>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <button class="btn pull-right" type="submit">Adicionar</button>
              </div>
            </div>
          </div>
        </form>
        </div>
        <br>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="prescrition">

      <!-- PRESCRIÇÃO -->
      <div id="addprescricao" class="container">
        <h1 class="text-center">Adicionar Prescrição</h1>

        <div class="row">
          <div class="col-md-4">
            <span class="glyphicon glyphicon-edit"></span>
          </div>

          <div class="col-md-8">
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="prescricaonome" name="prescricaonome" placeholder="Nome Paciente" type="text" required>
              </div>
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="prescricaocrm" name="prescricaocrm" placeholder="CRM Medico" type="text" required>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-12 form-group">
                <textarea class="form-control" rows="5" id="prescricaodescricao" placeholder="Descrição"></textarea>
              </div>
            </div>
            <div class="row">
              <label class="control-label col-sm-4">Selecione a Prescrição</label>
              <input id="input-b5" name="input-b5[]" type="file" multiple>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <button class="btn pull-right" type="submit">Adicionar</button>
                <button class="btn pull-right" type="submit">Buscar</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- TABELA -->

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


      <!-- RECEITA -->

      <div id="receita" class="container">
      <h1 class="text-center">Adicionar Receita</h1>

        <div class="row">
          <div class="col-md-4">
            <span class="glyphicon glyphicon-adjust"></span>
          </div>

          <div class="col-md-8">
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
            <div class="row">
              <div class="col-md-12 form-group">
                <button class="btn pull-right" type="submit">Adicionar</button>
                <button class="btn pull-right" type="submit">Alterar</button>
              </div>
            </div>
          </div>
        </div>
        <br>
      </div>  

    </div>
    <div role="tabpanel" class="tab-pane" id="profile">...

      <!-- PERFIL MEDICO -->

      <div id="perfil" class="container">
      <h1 class="text-center">Alterar Informações</h1>

        <div class="row">
          <div class="col-md-4">
            <span class="glyphicon glyphicon-cog"></span>
          </div>

          <div class="col-md-8">
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="mediconome" name="mediconome" placeholder="Nome" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <input class="form-control" id="medicoemail" name="medicoemail" placeholder="Email" type="text" required>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                  <input class="form-control" id="medicosenha" name="medicosenha" placeholder="Senha" type="text" required>
                </div>
              <div class="col-sm-6 form-group">
                  <input class="form-control" id="medicoconfsenha" name="medicoconfsenha" placeholder="Confirmar Senha" type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="medicocpf" name="medicocpf" placeholder="CPF" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="medicotelefone" name="medicotelefone" placeholder="Telefone" type="text" required>
                </div>  
            </div>
            <div class="row">
              <div class="col-sm-12 form-group">
                  <input class="form-control" id="medicoendereco" name="medicoendereco" placeholder="Endereco" type="text" required>
                </div> 
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                  <input class="form-control" id="medicocidade" name="medicocidade" placeholder="Cidade" type="text" required>
                </div>
                <div class="col-sm-2 form-group">
                  <input class="form-control" id="medicoestado" name="medicoestado" placeholder="Estado" type="text" required>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <button class="btn pull-right" type="submit">Alterar</button>
              </div>
            </div>
          </div><!-- cold 8 -->
        </div><!-- row -->
        <br>
      </div><!-- container perfil-->

    </div><!-- tab 3 -->

  </div><!-- tabs -->



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
  // TABS
  $('#myNavbar a[href="#home"]').tab('show');
  $('#myNavbar a[href="#prescrition"]').tab('show');
  $('#myNavbar a[href="#profile"]').tab('show');

  //ARQUIVO
  $(document).on('ready', function() {
    $("#input-b5").fileinput({showCaption: false});
</script>

</body>
</html>

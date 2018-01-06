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
  <link rel="stylesheet" href="<?= base_url("assets/css/doctorstyle.css")?>"  type="text/css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.16/r-2.2.1/datatables.min.css"/> 
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/r-2.2.1/datatables.min.js"></script>

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
      <a class="navbar-brand" >GM</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right" id="myNavbar">
        <li><a href="#pacientes" aria-controls="pacientes" role="tab" data-toggle="tab">PACIENTES</a></li>
        <li><a href="#consultas" aria-controls="consultas" role="tab" data-toggle="tab">CONSULTAS</a></li>
        <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">PERFIL</a></li>
        <li><a href="<?php echo base_url('index.php/Logout') ?>">SAIR</a></li>
      </ul>
    </div>
  </div>
</nav>


  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="pacientes">
  
        <div class="container">
        <h1 class="text-center">PACIENTES</h1>
      <!-- PACIENTE -->
          <table id="tabelapacientes" class="table table-hover">
            <thead>
              <tr>
                <th>CPF</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Endereco</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Pais</th>
              </tr>
            </thead>
            <tbody>

              <?php
              foreach($pacientes as $paciente){
                echo "<tr>";
                echo "<td>".$paciente->pac_CPF."</td>";
                echo "<td>".$paciente->pac_nome."</td>";
                echo "<td>".$paciente->pac_email."</td>";
                echo "<td>".$paciente->pac_telefone."</td>";
                echo "<td>".$paciente->pac_endereco."</td>";
                echo "<td>".$paciente->pac_cidade."</td>";
                echo "<td>".$paciente->pac_estado."</td>";
                echo "<td>".$paciente->pac_pais."</td>";
              }
              ?>
      </tbody>
    </table>
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
    <div role="tabpanel" class="tab-pane" id="consultas">
      <!-- CONSULTA -->

      <div id="addprescricao" class="container">
        <h1 class="text-center">CONSULTAS</h1>
        <!-- TABELA -->
        <div class="container-fluid">
          <table id="tabelaconsultas" class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Paciente</th>
              <th scope="col">Medico</th>
              <th scope="col">Mais</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($consultas as $consulta){
                  echo "<tr>";
                  echo "<td>".$consulta->con_id."</td>";
                  echo "<td>".$consulta->pac_CPF."</td>";
                  echo "<td>".$consulta->med_CPF."</td>";
                  if($consulta->med_CPF == $this->session->userdata['cpf']){
                  echo "<td><a  href='".base_url('Consulta/index/'.$consulta->con_id)."' class='btn-info btn-sm'>Abrir Consulta</a></td>";
                  }

            }
            ?>
          </tbody>
          </table>
        </div>
        <!-- ADICIONAR -->
        <h1 class="text-center">Adicionar Consulta</h1>
        <div class="row">
          <div class="col-md-4">
            <span class="glyphicon glyphicon-edit"></span>
          </div>
          <form  method="post" action="<?= base_url()?>Consulta/adicionar">
            <div class="col-md-8">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="paccpf" name="paccpf" placeholder="CPF Paciente" type="text" required>
                </div>
                <div class="col-md-6 form-group">
                  <button class="btn pull-right" type="submit">Adicionar</button>
                </div>
              </div>
            </div>
          </form>
        </div>


      </div>  
    </div>

    <div role="tabpanel" class="tab-pane" id="profile">

      <!-- PERFIL MEDICO -->
        <div id="perfil" class="container">
          <h1 class="text-center">DOUTOR</h1>

          <table id="medico" class="table table-hover table-inversed">
            <thead >
              <tr>
                <th>CPF</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Endereco</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Pais</th>
              </tr>
            </thead>
            <tbody>

              <?php
              foreach($medico as $medico){
                echo "<tr>";
                echo "<td>".$medico->med_CPF."</td>";
                echo "<td>".$medico->med_nome."</td>";
                echo "<td>".$medico->med_email."</td>";
                echo "<td>".$medico->med_telefone."</td>";
                echo "<td>".$medico->med_endereco."</td>";
                echo "<td>".$medico->med_cidade."</td>";
                echo "<td>".$medico->med_estado."</td>";
                echo "<td>".$medico->med_pais."</td>";

              }
              ?>
            </tbody>
          </table>



      <h1 class="text-center">Alterar Informações</h1>
        <div class="row">
          <div class="col-md-4">
            <span class="glyphicon glyphicon-cog"></span>
          </div>
          <div class="col-md-8">
            <form  method="post" action="<?= base_url()?>Doctor/alterarMedico">
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="mediconome" name="mediconome" placeholder="Nome" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <input class="form-control" id="medicoemail" name="medicoemail" placeholder="Email" type="email" required>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                  <input class="form-control" id="medicosenha" name="medicosenha" placeholder="Senha" type="password" required>
                </div>
              <div class="col-sm-6 form-group">
                  <input class="form-control" id="medicoconfsenha" name="medicoconfsenha" placeholder="Confirmar Senha" type="password" required>
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
                  <input class="form-control" id="medicoestado" name="medicoestado" placeholder="Estado" type="text" maxlength="2" required>
                </div>
                <div class="col-sm-4 form-group">
                  <input class="form-control" id="medicopais" name="medicopais" placeholder="Pais" type="text" required>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <button class="btn pull-right" type="submit">Alterar</button>
              </div>
            </div>
          </form>
          </div>
        </div>
        <br>

      </div>
    </div>
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
  // TABS
  $('#myNavbar a[href="#pacientes"]').tab('show');
  $('#myNavbar a[href="#consultas"]').tab('show');
  $('#myNavbar a[href="#profile"]').tab('show');

  //ARQUIVO

  $(document).ready(function() {
    $('#tabelaconsultas').DataTable();
  } );

    $(document).ready(function() {
    $('#tabelapacientes').DataTable();
  } );



</script>

</body>
</html>

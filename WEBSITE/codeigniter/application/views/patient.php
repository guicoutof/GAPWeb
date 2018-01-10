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
      <a class="navbar-brand">GM</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right" id="myNavbar">
        <li><a href="#home" aria-controls="home" role="tab" data-toggle="tab">PRESCRICAO</a></li>
        <li><a href="#consumo" aria-controls="consumo" role="tab" data-toggle="tab">CONSUMO</a></li>
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
      <h1 class="text-center">CONSULTAS</h1>
        <!-- TABELA -->
        <!-- <div class="container"> -->
          <table id="tabelaconsultas" class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID Registro</th>
              <th scope="col">ID Procedimento</th>
              <!-- <th scope="col">Em Andamento</th> -->
              <th scope="col">Mais</th>
              <th scope="col">Concluir</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              if(!is_null($pacprocedimentos)){
                foreach($pacprocedimentos as $pacprocedimento){
                  foreach ($pacprocedimento as $pacproc) {
                      if($pacproc->pac_proc_ativo == 1){
                      echo "<tr>";
                      echo "<td>".$pacproc->pac_proc_id."</td>";
                      echo "<td>".$pacproc->proc_id."</td>";
                      // echo "<td>".$pacproc->pac_proc_ativo."</td>";
                      echo "<td><a  href='".base_url('Patient/procedimento/'.$pacproc->proc_id)."' class='btn-info btn-sm'>Abrir Procedimento</a></td>";
                      echo "<td><a  href='".base_url('Patient/concluirPacProc/'.$pacproc->proc_id)."' class='btn-success btn-sm'>Concluido</a></td>";
                      }
                  }
                }
              }
            ?>
          </tbody>
          </table>
        <!-- </div> -->

      </div>
      </div><!-- tab -->

      <!-- TAB 2 CONSUMO -->
  <div role="tabpanel" class="tab-pane" id="consumo">
    <div class="container">
      <h1 class="text-center">CONSUMO</h1>

          <table id="tabelamedicamentos" class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Descricao</th>
              <th scope="col">X Dia</th>
              <th scope="col">Limite</th>
            </tr>
          </thead>
          <tbody>
            <?php
                if(!is_null($medicamentos)){ 
                  foreach($medicamentos as $medicamento){
                    foreach ($medicamento as $mdc) {
                      echo "<tr>";
                      echo "<td>".$mdc->mdc_id."</td>";
                      echo "<td>".$mdc->mdc_nome."</td>";
                      echo "<td>".$mdc->mdc_descricao."</td>";
                      echo "<td>".$mdc->mdc_intervalo_dia."</td>";
                      echo "<td>".$mdc->mdc_intervalo_limite."</td>";
                    }
                 }
                }
            ?>
          </tbody>
          </table>

          <hr>

          <h2 class="text-center">GRAVAR DIARIO</h2>
          <div class="row">
          <div class="col-md-4">
            <span class="glyphicon glyphicon-ok"></span>
          </div>
          <form  method="post" action="<?= base_url()?>Patient/addConsumo">
          <div class="col-md-8">
            <div class="row">
              <div class="col-sm-3 form-group">
                <input class="form-control" id="idpracproc" name="idpracproc" placeholder="ID Registro" type="number" required>
              </div>
              <div class="col-sm-3 form-group">
                <input class="form-control" id="idmdc" name="idmdc" placeholder="ID Medicamento" type="number" required>
              </div>
              <div class="col-sm-4 form-group">
                <input class="form-control" id="datamdc" name="datamdc" placeholder="Data" type="date" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <button class="btn pull-right" type="submit">Gravar</button>
              </div> <!-- form --><!-- group -->
            </div><!-- row -->
          </div>  <!-- cold m 8 -->
        </form>
        </div><!-- row -->

        <hr>

          <h2 class="text-center">REGISTRO DE CONSUMO</h2>

          <table id="tabelaconsumo" class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID Registro</th>
              <th scope="col">ID Medicamento</th>
              <th scope="col">Data</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                if(!is_null($consumos)){
                  foreach($consumos as $consumo){
                    foreach ($consumo as $con_mdc) {
                      echo "<tr>";
                      echo "<td>".$con_mdc->pac_proc_id."</td>";
                      echo "<td>".$con_mdc->mdc_id."</td>";
                      echo "<td>".$con_mdc->csm_data."</td>";  
                    }      
                  }
                }
            ?>
          </tbody>
          </table>


    </div>
  </div>


    <!--  TAB 3 PROFILE-->
  <div role="tabpanel" class="tab-pane" id="profile">
      <div class="container">

        <h1 class="text-center">PACIENTE</h1>
      <!-- PACIENTE -->


          <table id="paciente" class="table table-hover">
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
              foreach($paciente as $paciente){
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

      <hr>

      <h2 class="text-center">ALTERAR INFORMAÇÕES</h2>

        <div class="row">
          <div class="col-md-4">
            <span class="glyphicon glyphicon-cog"></span>
          </div>
          <form  method="post" action="<?= base_url()?>Patient/alterarPaciente">
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
                  <input class="form-control" id="telefone" name="telefone" placeholder="Telefone" type="text" required>
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
              <div class="col-sm-4 form-group">
                  <input class="form-control" id="pais" name="pais" placeholder="Pais" type="text" required>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <button class="btn pull-right" type="submit">Alterar</button>
              </div> 
            </div>
          </div> 
          </form> 
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
  //Initialize Tooltip
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
  $('#myNavbar a[href="#consumo"]').tab('show');

$(document).ready(function() {
    $('#tabelaconsultas').DataTable();
} );

$(document).ready(function() {
    $('#tabelaconsumo').DataTable();
} );

$(document).ready(function() {
    $('#tabelamedicamentos').DataTable();
} );

</script>

</body>
</html>

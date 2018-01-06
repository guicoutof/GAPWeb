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
      <a class="navbar-brand">GM</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right" id="myNavbar">
        <li><a href="#prescrition" aria-controls="prescrition" role="tab" data-toggle="tab">PROCEDIMENTO</a>
        <li><a href="<?php echo base_url('Patient/index')?>">VOLTAR</a></li>
        <li><a href="<?php echo base_url('index.php/Logout') ?>">SAIR</a></li>
      </ul>
    </div>
  </div>
</nav>





  <div class="tab-content">
    <div role="tabpanel" class="tab-pane" id="prescrition">



      <!-- CONSULTA -->
      <div id="addprescricao" class="container">
        <h1 class="text-center">PROCEDIMENTO</h1>
      <!-- TABELA -->
          <div class="container-fluid">
            <table id="instrucoes" class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Procedimento</th>
                <th scope="col">Medicamento</th>
                <th scope="col">Pré Procedimento</th>
                <th scope="col">Procedimento Geral</th>
                <th scope="col">Descrição</th>
              </tr>
            </thead>
            <tbody>
              <?php

                  foreach($instrucoes as $instrucao){
                    echo "<tr>";
                    echo "<td>".$instrucao->ins_id."</td>";
                    echo "<td>".$instrucao->proc_id."</td>";
                    echo "<td>".$instrucao->mdc_id."</td>";
                    echo "<td>".$instrucao->ins_procedimento."</td>";
                    echo "<td>".$instrucao->ins_geral."</td>";
                    echo "<td>".$instrucao->ins_descricao."</td>";
              }
              $this->session->set_userdata('proc_id',$proc_id);
              ?>
            </tbody>
            </table>
          </div>


    </div>


  </div><!-- tabs -->



<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
</footer>

<style>
  footer{
      position: absolute;
      bottom: 0;
      width: 100%;
  }
</style>

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
  $('#myNavbar a[href="#prescrition"]').tab('show');
  $('#myNavbar a[href="#medician"]').tab('show');

  //ARQUIVO


  $(document).ready(function() {
    $('#instrucoes').DataTable();
  } );




</script>

</body>
</html>

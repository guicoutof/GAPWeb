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
        <li><a href="<?php echo base_url('Doctor/index')?>">VOLTAR</a></li>
        <li><a href="<?php echo base_url('index.php/Logout') ?>">SAIR</a></li>
      </ul>
    </div>
  </div>
</nav>



  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="procedimento">
  
      <div class="container">
        <h1 class="text-center">PROCEDIMENTO</h1>


          <table id="procedimentos" class="table table-hover">
            <thead>
              <tr>
                <th>Consulta</th>
                <th>Procedimento</th>
                <th>Mais</th>
              </tr>
            </thead>
            <tbody>

              <?php
               // var_dump($procedimentos);die;
              foreach($procedimentos as $procedimento){
                echo "<tr>";
                echo "<td>".$procedimento->con_id."</td>";
                echo "<td>".$procedimento->proc_id."</td>";
                echo "<td><a  href='".base_url('Consulta/procedimento/'.$procedimento->proc_id)."' class='btn-primary btn-sm'>Abrir Procedimento</a></td>";
                

               
                // echo "<td><a  href='".base_url('evento/buscarParticipantes/'.$evento->id_evento)."' class='btn btn-info btn-sm'>Ver Participantes</a></td>";
                // if( $evento->id_criador == intval($this->session->id) ){
                
                // echo "<td><a  href='".base_url('evento/excluirEvento/'.$evento->id_evento)."' class='btn btn-danger btn-sm'>Remover</a></td>";
                // }else{
                //   echo "<td><a  href='".base_url('evento/realizarPagamento/'.$evento->id_evento)."' class='btn btn-success btn-sm'>Participar</a></td>";
                // }
              }
              ?>
            </tbody>
          </table>

          <div class="row">
            <a class="btn" href="<?php echo base_url('Consulta/addProcedimento/'.$con_id); ?>">Novo procedimento</a>
          </div>



      </div>
    </div>














      

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
  // $('#myNavbar a[href="#home"]').tab('show');
  // $('#myNavbar a[href="#prescrition"]').tab('show');
  // $('#myNavbar a[href="#profile"]').tab('show');

  //ARQUIVO

$(document).ready(function() {
    $('#procedimentos').DataTable();
  } );




</script>

</body>
</html>

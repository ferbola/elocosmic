
<?php
include("conexao.php");
session_start();
?>
<?php 
 //$email_cliente  = $_SESSION['email'];
//if($email_cliente != 'elojob@elojobsky.com'){
 // header('location:login.php');
 //}
?>
<?php
   if (isset($_POST['excluir'])) {
   //  print_r($_POST['nome']);
   //  print_r('<br>');
   //  print_r($_POST['email']);
   //  print_r('<br>');
   //  print_r($_POST['senha']);
   include_once('conexao.php');

   $id_compra = $_POST['id'];
   $delete = $result = mysqli_query($mysqli, "DELETE FROM compra WHERE id = '$id_compra'");
   header('location:adminarea.php');
   }
  ?>
  <?php
   if (isset($_POST['salvar'])) {
   //  print_r($_POST['nome']);
   //  print_r('<br>');
   //  print_r($_POST['email']);
   //  print_r('<br>');
   //  print_r($_POST['senha']);
   include_once('conexao.php');

   $id_compra = $_POST['id'];
   $id_booster = $_POST['booster'];
   $id_stats = $_POST['stats'];
   $delete = $result = mysqli_query($mysqli, "UPDATE compra SET booster_id = '$id_booster', stats_id = '$id_stats'  WHERE id = '$id_compra'");
   header('location:adminarea.php');
   }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>














<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">

<title>

   Admin Area





</title>



<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->

<link href="css/styles.css" rel="stylesheet" />
<script src="js/scripts.js"></script>

<link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





  </head>


  <body class="g-sidenav-show  bg-gray-100">





      <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" index.php " target="_blank">
      <img src="./assets/img/icons/final- dragon 1- sem fundo.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">EloSky</span>
    </a>
  </div>


  <hr class="horizontal light mt-0 mb-2">

  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">









      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Pedidos</h6>
      </li>
      <li class="nav-item">
  <a class="nav-link text-white " href="#todos">

      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">dashboard</i>
      </div>

    <span class="nav-link-text ms-1">Todos</span>
  </a>
</li>


<li class="nav-item">
  <a class="nav-link text-white " href="#afazer">

      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">table_view</i>
      </div>

    <span class="nav-link-text ms-1">A Fazer</span>
  </a>
</li>


<li class="nav-item">
  <a class="nav-link text-white " href="#fazendo">

      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">receipt_long</i>
      </div>

    <span class="nav-link-text ms-1">Fazendo</span>
  </a>
</li>


<li class="nav-item">
  <a class="nav-link text-white " href="#finalizado">

      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">view_in_ar</i>
      </div>

    <span class="nav-link-text ms-1">Finalizado</span>
  </a>
</li>





  









    </ul>
  </div>


  </div>

</aside>

      <main class="main-content border-radius-lg ">
        <!-- Navbar -->

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">

      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">index</li>
      </ol>
      <h6 class="font-weight-bolder mb-0">index</h6>

    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">

          <div class="input-group input-group-outline">
            <label class="form-label">Type here...</label>
            <input type="text" class="form-control">
          </div>

      </div>
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
        <li class="nav-item px-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0">
            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
          </a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- End Navbar -->





            <div class="container-fluid py-4">















<div class="row">
  <div class="col-lg-7 position-relative z-index-2">
    <div class="card card-plain mb-4">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-lg-6">
            <div class="d-flex flex-column h-100">
  <h2 class="font-weight-bolder mb-0" id="todos">Todos</h2>
</div>

          </div>
        </div>
      </div>
    </div>
    <?php
                        include_once('conexao.php');

                        if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                        }
                        $resultado_compras = mysqli_query($mysqli, "SELECT c.nome, b.nome_b, s.elo_final, s.valor, s.titulo, st.nome_st FROM compra co INNER JOIN cliente c ON c.id = co.cliente_id 
                          INNER JOIN servico s ON co.servico_id = s.id INNER JOIN booster b ON b.id = co.booster_id INNER JOIN stats st ON st.id = co.stats_id");
                        while($row_compras = mysqli_fetch_assoc($resultado_compras)){
                          

                          echo '<div class="card-body p-3">
                           <div class="row">
                            <div>
                                <div class="table-responsive">
                                    <table class="table align-items-center ">
                                        <tbody>
                                         <tr>
                                            <td class="w-30">
                                                <div class="ms-4">
                                                     <p class="text-xs font-weight-bold mb-0 ">Cliente:</p>
                                                     <h6 class="text-sm font-weight-normal mb-0 "> ' 
                                                        . $row_compras['nome'] . '</h6>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <td>
                                                      <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Booster:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 "> ' . $row_compras['nome_b'] . '</h6>
                                                      </div>
                                                    </td>
                                                    <td>
                                                      <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Serviço:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 ">' . $row_compras['titulo'] . '</h6>
                                                      </div>
                                                    </td>
                                                    <td>
                                                      <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Elo Alvo:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 ">' . $row_compras['elo_final'] . '</h6>
                                                      </div>
                                                    </td>
                                                    <td class="align-middle text-sm">
                                                      <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Preço:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 "> ' . $row_compras['valor'] . '</h6>
                                                      </div>
                                                    </td>
                                                    <td class="align-middle text-sm">
                                                      <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Situação:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 ">' . $row_compras['nome_st'] . '</h6>
                                                      </div>
                                                    </td>';
                        }

                        session_unset();

// destroy the session
                        session_destroy();

                        ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-lg-6 col-md-5">
          <div id="map" class="mt-0 mt-lg-n4"></div>
        </div>
      </div>
    </div>
  </div>

        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid py-4">















<div class="row">
  <div class="col-lg-7 position-relative z-index-2">
    <div class="card card-plain mb-4">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-lg-6">
            <div class="d-flex flex-column h-100">
  <h2 class="font-weight-bolder mb-0" id="fazendo">Em Aprovação</h2>
</div>

          </div>
        </div>
      </div>
    </div>
    <?php
                      include_once('conexao.php');

                      if(isset($_SESSION['msg'])){
                      echo $_SESSION['msg'];
                      unset($_SESSION['msg']);
                      }
                      $resultado_compras = mysqli_query($mysqli, "SELECT co.id,c.nome, b.nome_b, s.elo_final, s.valor, s.titulo, st.nome_st FROM compra co INNER JOIN cliente c ON c.id = co.cliente_id 
                        INNER JOIN servico s ON co.servico_id = s.id INNER JOIN booster b ON b.id = co.booster_id INNER JOIN stats st ON st.id = co.stats_id WHERE st.id = '1'");
                      while($row_compras = mysqli_fetch_assoc($resultado_compras)){
                        $id_compratest = $row_compras['id'];

                        echo '<div class="card-body p-3">
                        <input type="hidden" value="$id_compra" name="id"/>
                         <div class="row">
                          <div>
                              <div class="">
                              <form action="adminarea.php" method="POST">
                              <input type="hidden"  value="' . $row_compras['id'] .'" name="id"/>
                                  <table class="table align-items-center ">
                                      <tbody>
                                       <tr>
                                          <td class="w-30">
                                              <div class="ms-4">
                                                   <p class="text-xs font-weight-bold mb-0 ">Cliente:</p>
                                                   <h6 class="text-sm font-weight-normal mb-0 "> ' 
                                                      . $row_compras['nome'] . '</h6>
                                                      </div>
                                                    </div>
                                                  </td>
                                                  <td>
                                                    <div class="text-center">
                                                      <p class="text-xs font-weight-bold mb-0 ">Booster:</p>
                                                      <h6 class="text-sm font-weight-normal mb-0 ">' . $row_compras['nome_b'] . '</h6>
                                                      <select name="booster" id="booster" required="required">
                                                        <option value="1">Viego</option>
                                                        <option value="2">Fiddlesticks</option>
                                                        <option value="3">Kaisa</option>
                                                        <option value="4">Rakan</option>
                                                        <option value="5">Talon</option>
                                                        <option value="6">Kayn</option>
                                                        <option value="7" selected></option>
                                                        <option value="8">Karthus</option>
                                                        <option value="9">Poppy</option>
                                                        <option value="10">Katarina</option>
                                                        <option value="11">Yuumi</option>
                                                        <option value="12">Qiyana</option>
                                                        <option value="13">Heimerdinger</option>
                                                      </select>
                                                    </div>
                                                  </td>
                                                  <td>
                                                    <div class="text-center">
                                                      <p class="text-xs font-weight-bold mb-0 ">Serviço:</p>
                                                      <h6 class="text-sm font-weight-normal mb-0 ">' . $row_compras['titulo'] . '</h6>
                                                    </div>
                                                  </td>
                                                  <td>
                                                    <div class="text-center">
                                                      <p class="text-xs font-weight-bold mb-0 ">Elo Alvo:</p>
                                                      <h6 class="text-sm font-weight-normal mb-0 ">' . $row_compras['elo_final'] . '</h6>
                                                    </div>
                                                  </td>
                                                  <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                      <p class="text-xs font-weight-bold mb-0 ">Preço:</p>
                                                      <h6 class="text-sm font-weight-normal mb-0 "> ' . $row_compras['valor'] . '</h6>
                                                    </div>
                                                  </td>
                                                  <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                      <p class="text-xs font-weight-bold mb-0 ">Situação:</p>
                                                      <h6 class="text-sm font-weight-normal mb-0 ">' . $row_compras['nome_st'] . '</h6>
                                                      <select name="stats" id="stats" required>
                                                        
                                                        <option value="2" selected>A Fazer</option>
                                                        <option value="3">Fazendo</option>
                                                        <option value="4">Finalizado</option>
                                                      </select>
                                                    </div>
                                                  </td>
                                                  <td class="align-middle text-sm">
                                                                                                 
                                                  <div class="col text-center">
                                                  <input type="hidden"  value="' . $row_compras['id'] .'" name="id"/>
                                                  
                          .                        <button name="salvar" type="submit" class="btn btn-primary">Salvar</button>
                          </form>
                          <form action="adminarea.php" method="POST"> 
                                                             
                          <input type="hidden"  value="' . $row_compras['id'] .'" name="id"/>
                          

                        <button name="excluir" type="submit" class="btn btn-danger" type="submit">Excluir</button>
                                      </form>
                                                  
                                          


                                                    </div>

                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Deseja excluir?</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        Esta ação não poderá ser desfeita. Deseja continuar?
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                          <form action="adminarea.php" method="POST"> 
                                                           
                                                            <input type="hidden"  value="' . $row_compras['id'] .'" name="id"/>
                                                            
                                                          <button name="excluir" type="submit" class="btn btn-danger" type="submit">Excluir</button>
                                                                        </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                                        </div>
                                                </div>
                                                </td>
                                                ';
                      }

                      ?>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="col-lg-6 col-md-5">
    <div id="map" class="mt-0 mt-lg-n4"></div>
  </div>
</div>
</div>
</div>
</div>

  </div>
</div>
</div>
</div>

</div>

  <div class="container-fluid py-4">















    <div class="row">
      <div class="col-lg-7 position-relative z-index-2">
        <div class="card card-plain mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
      <h2 class="font-weight-bolder mb-0" id="afazer">A Fazer</h2>
    </div>

              </div>
            </div>
          </div>
        </div>
        <?php
                        include_once('conexao.php');

                        if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                        }
                        $resultado_compras = mysqli_query($mysqli, "SELECT co.id, c.nome, b.nome_b, s.elo_final, s.valor, s.titulo, st.nome_st FROM compra co INNER JOIN cliente c ON c.id = co.cliente_id 
                          INNER JOIN servico s ON co.servico_id = s.id INNER JOIN booster b ON b.id = co.booster_id INNER JOIN stats st ON st.id = co.stats_id WHERE st.id = '2'");
                        while($row_compras = mysqli_fetch_assoc($resultado_compras)){
                          $id_compratest = $row_compras['id'];

                          echo '<div class="card-body p-3">
                           <div class="row">
                            <div>
                                <div class="">
                                <form action="adminarea.php" method="POST">
                                <input type="hidden"  value="' . $row_compras['id'] .'" name="id"/>
                                    <table class="table align-items-center ">
                                        <tbody>
                                         <tr>
                                            <td class="w-30">
                                                <div class="ms-4">
                                                     <p class="text-xs font-weight-bold mb-0 ">Cliente:</p>
                                                     <h6 class="text-sm font-weight-normal mb-0 "> ' 
                                                        . $row_compras['nome'] . '</h6>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <td>
                                                      <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Booster:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 "> ' . $row_compras['nome_b'] . '</h6>
                                                        <select name="booster" id="booster" required>
                                                        <option value="1">Viego</option>
                                                        <option value="2">Fiddlesticks</option>
                                                        <option value="3">Kaisa</option>
                                                        <option value="4">Rakan</option>
                                                        <option value="5">Talon</option>
                                                        <option value="6">Kayn</option>
                                                        <option value="7" selected></option>
                                                        <option value="8">Karthus</option>
                                                        <option value="9">Poppy</option>
                                                        <option value="10">Katarina</option>
                                                        <option value="11">Yuumi</option>
                                                        <option value="12">Qiyana</option>
                                                        <option value="13">Heimerdinger</option>
                                                      </select>
                                                      </div>
                                                    </td>
                                                    <td>
                                                      <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Serviço:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 ">' . $row_compras['titulo'] . '</h6>
                                                      </div>
                                                    </td>
                                                    <td>
                                                      <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Elo Alvo:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 ">' . $row_compras['elo_final'] . '</h6>
                                                      </div>
                                                    </td>
                                                    <td class="align-middle text-sm">
                                                      <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Preço:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 "> ' . $row_compras['valor'] . '</h6>
                                                      </div>
                                                    </td>
                                                    <td class="align-middle text-sm">
                                                      <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Situação:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 ">' . $row_compras['nome_st'] . '</h6>
                                                        <select name="stats" id="stats" required>
                                                        
                                                        <option value="1">Em aprovação</option>
                                                        <option value="3" selected >Fazendo</option>
                                                        <option value="4">Finalizado</option>
                                                      </select>
                                                      </div>
                                                      
                                                    </td><td class="align-middle text-sm">
                                                                                                 
                                                    <div class="col text-center">
                                                    
                                                    <!-- Button trigger modal -->
                                                    <button name="salvar" type="submit" class="btn btn-primary">Salvar</button>
                          </form>
                          <form action="adminarea.php" method="POST"> 
                                                             
                          <input type="hidden"  value="' . $row_compras['id'] .'" name="id"/>
                          

                        <button name="excluir" type="submit" class="btn btn-danger" type="submit">Excluir</button>
                                      </form>
                                                      </div>

                                                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Deseja excluir?</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">
                                                          Esta ação não poderá ser desfeita. Deseja continuar?
                                                          </div>
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                            <form action="adminarea.php" method="POST"> 
                                                             
                                                              <input type="hidden"  value="' . $row_compras['id'] .'" name="id"/>
                                                              

                                                            <button name="excluir" type="submit" class="btn btn-danger" type="submit">Excluir</button>
                                                                          </form>
                                                          </div>
                                                        </div>
                                                      </div>
                                                                          </div>
                                                  </div>
                                                  </td>
                                                  ';
                        }
  
                        ?>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-lg-6 col-md-5">
        <div id="map" class="mt-0 mt-lg-n4"></div>
      </div>
    </div>
  </div>
</div>
</div>

      </div>
    </div>
  </div>
</div>

<div class="container-fluid py-4">















  <div class="row">
    <div class="col-lg-7 position-relative z-index-2">
      <div class="card card-plain mb-4">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-6">
              <div class="d-flex flex-column h-100">
    <h2 class="font-weight-bolder mb-0" id="fazendo">Fazendo</h2>
  </div>

            </div>
          </div>
        </div>
      </div>
      <?php
                        include_once('conexao.php');

                        if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                        }
                        $resultado_compras = mysqli_query($mysqli, "SELECT co.id, c.nome, b.nome_b, s.elo_final, s.valor, s.titulo, st.nome_st FROM compra co INNER JOIN cliente c ON c.id = co.cliente_id 
                          INNER JOIN servico s ON co.servico_id = s.id INNER JOIN booster b ON b.id = co.booster_id INNER JOIN stats st ON st.id = co.stats_id WHERE st.id = '3'");
                        while($row_compras = mysqli_fetch_assoc($resultado_compras)){
                          $id_compratest = $row_compras['id'];

                          echo '<div class="card-body p-3">
                           <div class="row">
                            <div>
                                <div class="">
                                <form action="adminarea.php" method="POST">
                                <input type="hidden"  value="' . $row_compras['id'] .'" name="id"/>
                                    <table class="table align-items-center ">
                                        <tbody>
                                         <tr>
                                            <td class="w-30">
                                                <div class="ms-4">
                                                     <p class="text-xs font-weight-bold mb-0 ">Cliente:</p>
                                                     <h6 class="text-sm font-weight-normal mb-0 "> ' 
                                                        . $row_compras['nome'] . '</h6>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <td>
                                                      <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Booster:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 "> ' . $row_compras['nome_b'] . '</h6>
                                                        <select name="booster" id="booster" required>
                                                        <option value="1">Viego</option>
                                                        <option value="2">Fiddlesticks</option>
                                                        <option value="3">Kaisa</option>
                                                        <option value="4">Rakan</option>
                                                        <option value="5">Talon</option>
                                                        <option value="6">Kayn</option>
                                                        <option value="7" selected></option>
                                                        <option value="8">Karthus</option>
                                                        <option value="9">Poppy</option>
                                                        <option value="10">Katarina</option>
                                                        <option value="11">Yuumi</option>
                                                        <option value="12">Qiyana</option>
                                                        <option value="13">Heimerdinger</option>
                                                      </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                      <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Serviço:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 ">' . $row_compras['titulo'] . '</h6>
                                                      </div>
                                                    </td>
                                                    <td>
                                                      <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Elo Alvo:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 ">' . $row_compras['elo_final'] . '</h6>
                                                      </div>
                                                    </td>
                                                    <td class="align-middle text-sm">
                                                      <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Preço:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 "> ' . $row_compras['valor'] . '</h6>
                                                      </div>
                                                    </td>
                                                    <td class="align-middle text-sm">
                                                      <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Situação:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 ">' . $row_compras['nome_st'] . '</h6>
                                                        
                                                        <select name="stats" id="stats" required>
                                                        
                                                        <option value="1">Em aprovação</option>
                                                        <option value="2" >A Fazer</option>
                                                        <option value="4" selected>Finalizado</option>
                                                      </select>
                                                        </div>
                                                      
                                                    </td> 
                                                    <td class="align-middle text-sm">
                                                                                                 
                                                    <div class="col text-center">
                                                    
                                                    <button name="salvar" type="submit" class="btn btn-primary">Salvar</button>
                                                    <!-- Button trigger modal -->
                                                    <form action="adminarea.php" method="POST"> 
                                                             
                          <input type="hidden"  value="' . $row_compras['id'] .'" name="id"/>
                          
                        <br>
                        <button name="excluir" type="submit" class="btn btn-danger" type="submit">Excluir</button>
                                      </form>
                                                    </div>

                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" >Deseja excluir? '.
                                                          $row_compras['id'] . '</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        Esta ação não poderá ser desfeita. Deseja continuar?'.
                                                        $row_compras['id'] . '
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                          <form action="adminarea.php" method="POST"> 
                                                           
                                                            <input type="hidden"  value="' . $row_compras['id'] .'" name="id"/>'.
                                                            $row_compras['id'] . '
                                                          
                                                          <button name="excluir" type="submit" class="btn btn-danger" type="submit">Excluir</button>
                                                                        </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                                        </div>
                                                </div>
                                                </td>
                                                ';
                      }

                      ?>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-lg-6 col-md-5">
      <div id="map" class="mt-0 mt-lg-n4"></div>
    </div>
  </div>
</div>
</div>
</div>

    </div>
  </div>
</div>
</div>

  </div>
  <div class="container-fluid py-4">















    <div class="row">
      <div class="col-lg-7 position-relative z-index-2">
        <div class="card card-plain mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
      <h2 class="font-weight-bolder mb-0" id="finalizado">Finalizado</h2>
    </div>

              </div>
            </div>
          </div>
        </div>
        <?php
                        include_once('conexao.php');

                        if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                        }
                        $resultado_compras = mysqli_query($mysqli, "SELECT co.id, c.nome, b.nome_b, s.elo_final, s.valor, s.titulo, st.nome_st FROM compra co INNER JOIN cliente c ON c.id = co.cliente_id 
                          INNER JOIN servico s ON co.servico_id = s.id INNER JOIN booster b ON b.id = co.booster_id INNER JOIN stats st ON st.id = co.stats_id WHERE st.id = '4'");
                        while($row_compras = mysqli_fetch_assoc($resultado_compras)){
                          $id_compratest = $row_compras['id'];

                          echo '<div class="card-body p-3">
                           <div class="row">
                            <div>
                                <div class="">
                                <form action="adminarea.php" method="POST">
                                <input type="hidden"  value="' . $row_compras['id'] .'" name="id"/>
                                    <table class="table align-items-center ">
                                        <tbody>
                                         <tr>
                                            <td class="w-30">
                                                <div class="ms-4">
                                                     <p class="text-xs font-weight-bold mb-0 ">Cliente:</p>
                                                     <h6 class="text-sm font-weight-normal mb-0 "> ' 
                                                        . $row_compras['nome'] . '</h6>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <td>
                                                      <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Booster:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 "> ' . $row_compras['nome_b'] . '</h6>
                                                        <select name="booster" id="booster" required>
                                                        <option value="1">Viego</option>
                                                        <option value="2">Fiddlesticks</option>
                                                        <option value="3">Kaisa</option>
                                                        <option value="4">Rakan</option>
                                                        <option value="5">Talon</option>
                                                        <option value="6">Kayn</option>
                                                        <option value="7" selected></option>
                                                        <option value="8">Karthus</option>
                                                        <option value="9">Poppy</option>
                                                        <option value="10">Katarina</option>
                                                        <option value="11">Yuumi</option>
                                                        <option value="12">Qiyana</option>
                                                        <option value="13">Heimerdinger</option>
                                                      </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                      <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Serviço:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 ">' . $row_compras['titulo'] . '</h6>
                                                      </div>
                                                    </td>
                                                    <td>
                                                      <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Elo Alvo:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 ">' . $row_compras['elo_final'] . '</h6>
                                                      </div>
                                                    </td>
                                                    <td class="align-middle text-sm">
                                                      <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Preço:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 "> ' . $row_compras['valor'] . '</h6>
                                                      </div>
                                                    </td>
                                                    <td class="align-middle text-sm">
                                                      <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0 ">Situação:</p>
                                                        <h6 class="text-sm font-weight-normal mb-0 ">' . $row_compras['nome_st'] . '</h6>
                                                        <select name="stats" id="stats" required>
                                                        
                                                        <option value="1" selected>Em aprovação</option>
                                                        <option value="2">A Fazer</option>
                                                        <option value="3" >Fazendo</option>
                                                        
                                                      </select>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-sm">
                                                                                                 
                                                  <div class="col text-center">
                                                  <button name="salvar" type="submit" class="btn btn-primary">Salvar</button>
                          </form>
                          <form action="adminarea.php" method="POST"> 
                                                             
                          <input type="hidden"  value="' . $row_compras['id'] .'" name="id"/>
                          

                        <button name="excluir" type="submit" class="btn btn-danger" type="submit">Excluir</button>
                                      </form>
                                                  
                                                  </div>

                                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Deseja excluir?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">
                                                      Esta ação não poderá ser desfeita. Deseja continuar?
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                        <form action="adminarea.php" method="POST"> 
                                                         
                                                          <input type="hidden"  value="' . $row_compras['id'] .'" name="id"/>
                                                          
                                                        <button name="excluir" type="submit" class="btn btn-danger" type="submit">Excluir</button>
                                                                      </form>
                                                                      
                                                      </div>
                                                    </div>
                                                  </div>
                                                                      </div>
                                              </div>
                                              </td>
                                              ';
                    }

                    ?>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-lg-6 col-md-5">
        <div id="map" class="mt-0 mt-lg-n4"></div>
      </div>
    </div>
  </div>
</div>
</div>

      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div id="globe" class="position-absolute end-0 top-10 mt-sm-3 mt-7 me-lg-7">
      <canvas width="700" height="600" class="w-lg-100 h-lg-100 w-75 h-75 me-lg-0 me-n10 mt-lg-5"></canvas>
    </div>
  </div>
</div>


                <footer class="footer py-4  ">
  <div class="container-fluid">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="copyright text-center text-sm text-muted text-lg-start">
          © <script>
            document.write(new Date().getFullYear())
          </script>,
           by
          <a class="font-weight-bold" target="_blank">EloSky</a>
        </div>
      </div>
      </div>
    </div>
  </div>
</footer>

            </div>


       </main>



          <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>

        <!-- Sidenav Type -->

        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>

        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>

        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>


        <!-- Navbar Fixed -->

        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>



        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>

        </div>
      </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deseja excluir?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Esta ação não poderá ser desfeita. Deseja continuar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <form action="adminarea.php" method="POST"> 
          <?php
          echo '<input type="hidden"  value="' . $id_compratest .'" name="id"/>';
          ?>
        <button name="excluir" type="submit" class="btn btn-danger" type="submit">Excluir</button>
                      </form>
      </div>
    </div>
  </div>
                      </div>


















<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>










































































<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>
  </body>

</html>

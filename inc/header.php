<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>AJ Simulações 3D</title>
  </head>
  <body>
  <!-- INICIO - DEFININDO A ÁREA DE CABEÇALHO -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">                    
                    <a class="nav-item nav-link active" href="#">Sobre</a>                    
                    <a class="nav-item nav-link active" href="#">Regulamentos</a>
                    <a class="nav-item nav-link active" href="#">Feedback</a>            
                </div>
                <div class="container" style="align-items: flex-end; justify-content: end;">
                    <a class="nav-item nav-link active" href="/crudSimulacao/minhasReq.php" style="color: white;">Minhas requisições</a>
                    <a class="nav-item nav-link active" href="/crudSimulacao/clientes/atendimento.php">Atendimento</a>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color:#44245E">
            <div class="logoIndex">
                <a href="/crudSimulacao/index.php">
                    <figure>
                        <img class="logoIndex" src="/crudSimulacao/imagens/logo-sem-fundo.png" alt="Logo" width="150vw" height="70vh" style="margin-left: 30px;">
                    </figure>
                </a>
            </div> 
            <div class="container col-md-7" style="margin-left: 60px; align-items: center; justify-content: center">
                <input type="text" class="form-control" aria-describedby="search" placeholder="O que está procurando?">
            </div>
            <div class="container" style="align-items: flex-end; justify-content: end;">       
                <a href="/crudSimulacao/clientes/insere.php" class="btn btn-primary btn-lg" style="margin-left: 50px; margin-right: 10px;" role="button" >
                Entre ou cadastre-se
                </a>
            </div>
        </nav>
    </header>
    <!-- FINAL - DEFININDO A ÁREA DE CABEÇALHO -->

    <!-- INÍCIO - DEFININDO A ÁREA PARA O CORPO DA PÁGINA -->
    <div class="container">
        <!-- criando uma área central -->
        <main class="container text-center">
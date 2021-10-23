<!-- IMPORTANDO O HEADER -->
<?php 
  require_once('config.php');
  include(HEADER_TEMPLATE); 
?>

  <br/>
  <hr/>
  <header>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
          <h1 class="display-4">Seja bem-vindo ao futuro em soluções para arquitetura!</h1>
        </div>
      </div>
      <br></br>
    </div>    
  </header>

  <body>
    <div class="container" style="background-color:#44245E;">
      <div class="row justify-content-center align-items-center">        
        <div id="carouselSite" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li class="active" data-target="#carouselSite" data-slide-to="0"></li>
            <li class="active" data-target="#carouselSite" data-slide-to="1"></li>
            <li class="active" data-target="#carouselSite" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/crudSimulacao/imagens/carous1.jpg" class="img-fluid d-block">
              <div class="carousel-caption d-none d-md-block">
                  <h3>Soluções em Arquitetura Digital</h3>
                  <p>Na AJ Simulações, criamos simulações 3D ultra-realistas baseadas no seu projeto/planta, 
                    utilizando o que há de melhor em tecnologia de ponta!
                  </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/crudSimulacao/imagens/carous2.jpg" class="img-fluid d-block">
              <div class="carousel-caption d-none d-md-block">
                <h3>Diferencial para o seu negócio</h3>
                <p>Com simulações detalhistas e condizentes com o requisitado, é possível visualizar 
                  e interagir detalhadamente com sua futura construção.         
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/crudSimulacao/imagens/carous3.jpg" class="img-fluid d-block">
              <div class="carousel-caption d-none d-md-block">
                <h3>Tecnologia de ponta</h3>
                <p>Utilizamos software da mais alta qualidade disponível para desenvolvimento, fornecendo todo o suporte
                  necessário para que você alcance seus objetivos e aproveite nossos serviços.
                </p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Avançar</span>
          </a>
        </div>
      </div>
    </div>  
    <hr>
    <br><br>
    <br><br>

    <div class="container">
      <div class="row justify-content-center align-items-center">
        <h1 class="display-6">Confira algumas de nossas demonstrações:</h1>
        <br><br>
      </div>
    </div>

    <div class="container" style="background-color: lightgrey; margin-top: 3%; margin-bottom: 5rem;">
      <br><br>
      <h5>As versões abaixo estão disponíveis para download, porém, são apenas demonstrações básicas do poder
        de simulação e detalhe que possuimos. Envie uma requisição e peça seu projeto personalizado!
      </h4>
      <div class="row justify-content-center align-items-center">
          <div class="card" style="width: 30%; margin-right: 2%; margin-left: 1%; margin-top: 6%; margin-bottom: 6%;">
              <img src="/crudSimulacao/imagens/card1.jpg" class="card-img-top" alt="Casa">
              <div class="card-body">
                  <h5 class="card-title">Casa</h5>
                  <span class="card-text">Demonstração da simulação de uma casa simples</span>
                  <br>
              </div>
              <a href="/crudSimulacao/downloadDemo.php" class="btn btn-md btn-light" role="button">Visualizar</a>                
          </div>
          <div class="card" style="width: 30%; margin-right: 2%; margin-top: 6%; margin-bottom: 6%;">
              <img src="/crudSimulacao/imagens/card2.jpg" class="card-img-top" alt="Apartamento">
              <div class="card-body">
                  <h5 class="card-title">Apartamento</h5>
                  <span class="card-text">Demonstração da simulação de um apartamento simples</span>
                  <br>
              </div>
              <a href="#" class="btn btn-md btn-light" role="button">Visualizar</a>                
          </div>
          <div class="card" style="width: 30%; margin-right: 1%; margin-top: 6%; margin-bottom: 6%;">
              <img src="/crudSimulacao/imagens/card3.jpg" class="card-img-top" alt="Condomínio">
              <div class="card-body">
                  <h5 class="card-title">Condomínio</h5>
                  <span class="card-text">Demonstração da simulação de um condomínio de prédios</span>
                  <br>
              </div>
              <a href="#" class="btn btn-md btn-light" role="button">Visualizar</a>                
          </div>
      </div>
      <a href="/crudSimulacao/clientes/insere.php" role="button" class="btn btn-outline-dark btn-lg btn-block">Faça já sua requisição!</a>
      <br><br>   
    </div>
  </body>
  
  <div class="footer" style="background-color: #44245E; color: white;">
    <div class="row justify-content-center align-items-center">
      <div style="display:flex; flex-direction:column; text-align:left; margin-top: 5%;">
        <h5>Central de Atendimento</h5>
          <span>Atendimento</span>
          <span>Termos</span>
          <span>Desistência ou devolução</span>
          <span>Minhas requisições</span>
          <span>Suporte técnico</span>
          <span>Política de privacidade</span>
        <br><br>
      </div>
      <div style="display:flex; flex-direction:column; text-align:left; margin-left: 2%;margin-top: 3.6%;">
        <h5>Serviços</h5>
          <span>Requisitar simulação 3D</span>
          <span>Consultoria e análise 3D</span>
          <span>Suporte e personalização</span>
          <span>Feedback</span>
        <br>
        <h5>Parcerias</h5>
          <span>Torne-se nosso parceiro</span>
      </div>
      <div style="display:flex; flex-direction:column; text-align:left; margin-left: 2%;; margin-top: 5%;">
        <h5>Institucional</h5>
          <span>Sobre a AJ3D</span>
          <span>Onde estamos</span>
          <span>Trabalhe conosco</span>
          <span>Pesquisas acadêmicas</span>
          <span>Tecnologias em uso</span>
          <span>Acessibilidade</span>
        <br><br>
      </div>
      <div style="display:flex; flex-direction:column; text-align:left; margin-left: 2%;margin-top: 11%;">
        <h5>Contatos</h5>
          <span>Siga-nos no Instagram</span>
          <figure>
            <img width="30vw" height="30vh" src="/crudSimulacao/imagens/instagram.png" alt="instagram">
            <span>@AJ3D_simula</span>
          </figure>
          <span>Siga-nos no Facebook</span>
            <figure>
              <img width="30vw" height="30vh" src="/crudSimulacao/imagens/facebook.png" alt="facebook">
              <span>AJ3D Simulações</span>
            </figure>    
          <h6>Emails</h6>
            <span>contato1@aj3d.com.br</span>
            <span>contato2@aj3d.com.br</span>
        <br><br>
      </div>
    </div>
  </div>
  

<?php
  include(FOOTER_TEMPLATE);
?>
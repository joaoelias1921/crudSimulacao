<!-- IMPORTANDO O HEADER -->
<?php 
  require_once('config.php');
  include(HEADER_TEMPLATE2); 
?>

  <br/>
  <hr/>
  <header>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
          <h1 class="display-4">Acompanhamento</h1>
        </div>
      </div>
      <br></br>
    </div>    
  </header>

  <body>
    <div class="container">
      <div class="row">
        <h3 class="display-6">Abaixo, você pode acompanhar o status da análise/desenvolvimento da sua requisição.</h3>
        <br><br>
      </div>
    </div>
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="/crudSimulacao/processoReqProjeto.php">Projeto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/crudSimulacao/processoReqCliente.php">Cliente</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/crudSimulacao/processoReqArquivo.php">Arquivos</a>
            </li>
            </ul>
        </div>
        <div class="card-body">
            <p class="card-text text-left"><strong>Informações referentes ao projeto em análise</strong></p>
            <ul class="list-group list-group-flush text-left">
                <li class="list-group-item"><strong>Título:</strong> Projeto apartamento Srta. Maria</li>
                <li class="list-group-item"><strong>Prazo máximo estipulado:</strong> 10/12/2021</li>
                <li class="list-group-item"><strong>Orçamento máximo estimado:</strong> R$15000.00</li>
                <li class="list-group-item"><strong>Descrição:</strong> A análise dos edifícios, seus projetos e os hábitos dos usuários são alternativas para uma melhor compreensão das formas de habitar de uma sociedade. Neste sentido, e a fim de estabelecer uma perspectiva temporal, reportamos dados históricos sobre o desenvolvimento dos edifícios de apartamento.</li>
            </ul>
        </div>

        <br>
        <div class="card-body">
            <p class="card-text text-left"><h3 class="text-left">Progresso</h3></p>
            <br>
            <div class="progress" style="height: 8vh">
                <div class="progress-bar" role="progressbar" style="width: 25%; font-size: 1.2rem; font-weight:bold" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Análise de viabilidade</div>
            </div>
            <br>
            <div class="progress" style="height: 8vh">
                <div class="progress-bar  bg-success" role="progressbar" style="width: 35%; font-size: 1.2rem; font-weight:bold" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Aceite do cliente</div>
            </div>
            <br>
            <div class="progress" style="height: 8vh">
                <div class="progress-bar  bg-info" role="progressbar" style="width: 50%; font-size: 1.2rem; font-weight:bold" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Aprovação do pagamento</div>
            </div>
            <br>
            <div class="progress" style="height: 8vh;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%; font-size: 1.2rem; font-weight:bold" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Desenvolvimento e Modelagem 3D</div>
            </div>
            <br>
            <div class="progress" style="height: 8vh">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%; font-size: 1.2rem; font-weight:bold" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Entrega e Feedback</div>
            </div>
        </div>
        
    </div>
    <br><br>
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
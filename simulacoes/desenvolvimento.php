<!-- IMPORTANDO O HEADER -->
<?php 
  require_once('../config.php');
  include(HEADER_TEMPLATE2); 
?>

    <br/>
    <hr/>
    <header>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10">
                    <h1 class="display-4">Desenvolvimento da Simulação</h1>
                </div>
            </div>
            <br></br>
        </div>    
    </header>

    <body>
        <div class="container">
            <div class="form-row justify-content-center align-items-center">
                <div class="card-body">
                    <div class="container-titulo">
                        <p class="card-text text-left" style="color: white;"><strong>Estágios de Desenvolvimento</strong></p>
                    </div>  
                    <ul class="list-group list-group-flush text-left">
                        <li class="list-group-item">
                            <div class="container-esquerda">
                                <div class="card justify-content-center align-items-center" style="width: 18rem;">                               
                                    <div class="card-body">
                                        <h5 class="card-title">Desenvolvimento 3D</h5>
                                        <p class="card-text">Parabéns! Seu projeto já está em desenvolvimento. Nesta tela, é possível acompanhar os estágios de desenvolvimento da sua simulação!</p>
                                        <p class="card-text">Agora é só aguardar, nossa equipe te enviará uma notificação sempre que avançar de estágio, ou quando o software estiver pronto.</p>
                                        <br>
                                        <h5 class="card-title">Projeto</h5>
                                        <p class="card-text"><strong>Título:</strong> Projeto apartamento Srta. Maria</p>
                                        <p class="card-text"><strong>Nome do cliente:</strong> Maria Antonieta dos Anjos</p>
                                        <p class="card-text"><strong>Valor pago: <span style="color: green">R$389,33</span></strong> reais (boleto bancário)</p>
                                    </div>
                                </div>
                            </div>      
                            <br><br>       
                            <div class="container-dev">
                                <div class="container text-left">
                                    <h1 class="card-title text-center">Acompanhamento</h1>
                                    <div class="card-body text-center">                                        
                                        <h4 class="card-title text-center">Visualize aqui em qual estágio seu projeto está!</h4>
                                        <br><br>
                                        <div class="progress" style="height: 8vh; font-size: medium;">                                        
                                            <div id="progresso" class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><strong>Análise</strong></div>                                           
                                        </div>
                                        <br>
                                        <p id="desc-estagio" style="min-height: 16vh;" class="card-text alert alert-info">Este é o primeiro estágio do desenvolvimento, onde nossos desenvolvedores estão projetando e verificando quais as melhores formas de construir a aplicação.</p>
                                        <div class="btns">
                                            <a class="btn btn-outline-info" onclick="voltaProgresso()">Voltar</a>
                                            <a class="btn btn-outline-success" onclick="aumentaProgresso()">Avançar</a>                                
                                        </div>
                                        <br><br>
                                        <a href="/crudSimulacao/simulacoes/feedback.php" style="text-decoration:none">
                                            <button id="btn-continua" class="btn btn-block btn-success" disabled>Continuar</button>
                                        </a>
                                    </div>                                                
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>                
                <br><br>
                <br><br>
            </div>
        </div>    
    </body>

    <script>
        function aumentaProgresso() {
            let elem = document.getElementById("progresso");
            let elem2 = document.getElementById("desc-estagio");

            if(elem.style.width == "25%"){
                elem.style.width = 50 + "%";
                elem.classList = "progress-bar bg-success";
                elem.innerHTML = "<strong>Construção do projeto</strong>";
                elem2.innerHTML = "Este é o segundo estágio do desenvolvimento. Aqui, o projeto sai do plano das ideias e é construído utilizando ferramentas de diagramação/projeto, servindo como um norte para o desenvolvimento.";
            }else if(elem.style.width == "50%"){
                elem.style.width = 75 + "%";
                elem.classList = "progress-bar bg-warning"
                elem.innerHTML = "<strong>Desenvolvimento 3D</strong>";
                elem2.innerHTML = "Este é o terceiro e penúltimo estágio do desenvolvimento, onde acontece a programação e construção 3D própriamente dita. Sua simulação está quase pronta!";
            }else if(elem.style.width == "75%"){
                elem.style.width = 100 + "%";
                elem.classList = "progress-bar bg-danger";
                elem.innerHTML = "<strong>Finalização e Entrega</strong>";
                elem2.innerHTML = "Sua simulação está pronta! Agora é só baixar e testar, nossa equipe estará sempre disponível para suporte, caso seja necessário. É possível baixar a simulação clicando novamente no botão abaixo!";              
            }

            if(elem.style.width == "100%"){
                document.getElementById("btn-continua").removeAttribute("disabled");
            }
        }

        function voltaProgresso(){
            let elem = document.getElementById("progresso");
            let elem2 = document.getElementById("desc-estagio");

            if(elem.style.width == "100%"){
                elem.style.width = 75 + "%";
                elem.classList = "progress-bar bg-warning";
                elem.innerHTML = "<strong>Desenvolvimento 3D</strong>";
                elem2.innerHTML = "Este é o terceiro e penúltimo estágio do desenvolvimento, onde acontece a programação e construção 3D própriamente dita. Sua simulação está quase pronta!";
                document.getElementById("btn-continua").setAttribute("disabled", null);
            }else if(elem.style.width == "75%"){
                elem.style.width = 50 + "%";
                elem.classList = "progress-bar bg-success";
                elem.innerHTML = "<strong>Construção do projeto</strong>";
                elem2.innerHTML = "Este é o segundo estágio do desenvolvimento. Aqui, o projeto sai do plano das ideias e é construído utilizando ferramentas de diagramação/projeto, servindo como um norte para o desenvolvimento.";
            }else if(elem.style.width == "50%"){
                elem.style.width = 25 + "%";
                elem.classList = "progress-bar";
                elem.innerHTML = "<strong>Análise</strong>";
                elem2.innerHTML = "Este é o primeiro estágio do desenvolvimento, onde nossos desenvolvedores estão projetando e verificando quais as melhores formas de construir a aplicação.";
            }
        }
    </script>

    <style type="text/css">
        .container-titulo{
            background-color: #44245E;
            height: 9vh;
            padding-left: 2ch;
            padding-top: 2vh;
        }

        .container-esquerda{
            width: 30%;
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            float: left;
        }

        .container-dev{
            width: 70%;
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            float: left;
        }

        .container-esquerda .card-body{
            background-color: lightgray;
        }
    </style>

<?php
    include(FOOTER_TEMPLATE);
?>
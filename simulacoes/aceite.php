<!-- IMPORTANDO O HEADER -->
<?php 
  require_once('../config.php');
  include(HEADER_TEMPLATE); 
?>

  <br/>
  <hr/>
  <header>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
          <h1 class="display-4">Contrato e Aceite</h1>
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
                    <p class="card-text text-left" style="color: white;"><strong>Seu projeto</strong></p>
                </div>           
                <ul class="list-group list-group-flush text-left">
                    <li class="list-group-item"><strong>Título:</strong> Projeto apartamento Srta. Maria</li>
                    <li class="list-group-item"><strong>Prazo máximo estipulado:</strong> 10/12/2021</li>
                    <li class="list-group-item"><strong>Orçamento máximo estimado:</strong> R$15000.00</li>
                    <li class="list-group-item"><strong>Descrição:</strong> A análise dos edifícios, seus projetos e os hábitos dos usuários são alternativas para uma melhor compreensão das formas de habitar de uma sociedade. Neste sentido, e a fim de estabelecer uma perspectiva temporal, reportamos dados históricos sobre o desenvolvimento dos edifícios de apartamento.</li>
                    <li class="list-group-item"><strong>Resultado da análise: <span style="color: green">Viável</span></strong></li>
                </ul>
            </div>
        </div>
        <div class="form-row justify-content-center align-items-center">
            <div class="card-body">
                <div class="container-titulo">
                    <p class="card-text text-left" style="color: white;"><strong>Informações do cliente</strong></p>
                </div>  
                <ul class="list-group list-group-flush text-left">
                    <li class="list-group-item"><strong>Projeto para:</strong> Pessoa Física</li>
                    <li class="list-group-item"><strong>Nome:</strong> Maria Antonieta dos Anjos</li>
                    <li class="list-group-item"><strong>E-mail:</strong> mariantoni@gmail.com</li>
                    <li class="list-group-item"><strong>Descrição:</strong> Cliente tem grande vontade de interagir e visualizar seu apartamento, onde poderá revisar detalhes de acabamento, pintura, móveis e decoração para se satisfazer com sua residência.</li>
                </ul>
            </div>
        </div>
        <div class="form-row justify-content-center align-items-center">
            <div class="card-body">
                <div class="container-titulo">
                    <p class="card-text text-left" style="color: white;"><strong>Informações de desenvolvimento</strong></p>
                </div>  
                <ul class="list-group list-group-flush text-left">
                    <li class="list-group-item"><strong>Nome do projeto:</strong> Projeto Edifício Maria Antonieta</li>
                    <li class="list-group-item"><strong>Prazo estimado de conclusão:</strong> 25 dias úteis</li>
                    <li class="list-group-item"><strong>Valor a pagar:</strong> R$432.58 reais (formas de pagamento serão informadas após o aceite)</li>
                    <li class="list-group-item"><strong>Principal tecnologia utilizada:</strong> Unity 3D</li>
                    <li class="list-group-item"><strong>Formato de entrega:</strong> Arquivo executável (.exe) | Pastas e subpastas do projeto (.zip) | Documentação (.pdf) | Cópia do contrato (.pdf)</li>
                </ul>
            </div>
        </div>
        <div class="form-row justify-content-center align-items-center">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalContrato">
                Visualizar Contrato
            </button>
        </div>
        <br><br>

        
    </div>
  </body>

  <!-- Modal -->
    <div class="modal fade" id="modalContrato" tabindex="-1" aria-labelledby="nomeModalContrato" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 80%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nomeModalContrato">Aceite de Contrato</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="contrato" class="modal-body text-left">
                    <pre>
                            CONTRATO DE PRESTAÇÃO DE SERVIÇOS E DE ASSUNÇÃO DE RESPONSABILIDADE TÉCNICA

CONTRATANTE:  (nome da empresa, CNPJ, endereço, ramo de atividade) neste ato representada por seu sócio-gerente 
(nome do representante legal, nacionalidade, estado civil, profissão, RG, CIC).

CONTRATADO(A): (nome do(a) profissional, nacionalidade, estado civil, categoria profissional da arquitetura e urbanismo, 
CAU, RG, CPF, endereço).

Pelo presente instrumento particular de Contrato de Prestação de Serviços e de Assunção de Responsabilidade Técnica, as partes acima 
qualificadas têm entre si justo e avençado o seguinte:

CLÁUSULA PRIMEIRA – DO OBJETO
A CONTRATANTE, empresa cuja atividade é da área da (descrever o ramo de atividade da empresa), a fim de atender ao que determina o 
parágrafo único do Artigo 10 da Lei Federal nº 12378 de 31 de dezembro de 2010, firma o presente contrato com o(a) CONTRATADO(A), 
o(a) qual obriga-se a prestar à CONTRATANTE serviços profissionais atinentes a sua formação e habilitação técnico-profissional 
conforme atribuições previstas na Lei Federal 12.378/2010, nas áreas afins e correlatas de arquitetura e urbanismo e a assumir a 
responsabilidade técnica perante o referido órgão de fiscalização profissional (CAU/TO Conselho de Arquitetura e 
Urbanismo do Tocantins) e outros que lhe exijam.
Parágrafo único – O(A) CONTRATADO(A) prestará à CONTRATANTE as seguintes atividades: (descrever as atividades que efetivamente 
serão desenvolvidas como por exemplo: a produção, fabricação, análise, padronização, controle de qualidade, tratamentos, misturas, 
desenvolvimento de produtos, acondicionamento, embalagem e re-embalagem, estocagem, assessoramento, consultoria e 
comercialização) enfim, tudo o que for pertinente à sua capacitação profissional para manter a regularidade da atividade explorada 
pela CONTRATANTE.

CLÁUSULA SEGUNDA – DAS CONDIÇÕES DE EXECUÇÃO DOS SERVIÇOS
A CONTRATANTE deverá indicar o(a) CONTRATADO(A) como responsável técnico, por sua atividade na área arquitetura e urbanismo, 
perante o CAU/TO e o CONTRATADO deverá registrar, perante aquele Órgão, RRT – Registro de Responsabilidade Técnica de Cargo/Função 
que ficará fazendo parte integrante do presente instrumento com reconhecimento de firma.

CLÁUSULA TERCEIRA – DA REMUNERAÇÃO
A CONTRATANTE é responsável por eventuais retenções de impostos e contribuições previstos na legislação tributária e previdenciária 
e pagará ao (à) CONTRATADO(A), todo dia ...... do mês subseqüente àquele do serviço efetivamente prestado , 
a importância de R$.........
O pagamento será efetuado na sede da CONTRATANTE, com emissão do respectivo recibo pelo(a) CONTRATADO(A).
Nota : A remuneração de profissionais não poderá ser inferior ao salário mínimo profissional com base na Lei 4950-A/66.
Parágrafo 1º - Ao (a) CONTRATADO(a) fica reservado o período de trabalho das 00:00 as 00:00h diários/semanais/mensais.
O pagamento 2º será efetuado na sede da CONTRATANTE, com emissão do respectivo recibo pelo(a) CONTRATADO(a).
Nota: As partes poderão adotar livremente outra forma de pagamento que mais lhes convenha.
Parágrafo 3º - Em nenhuma hipótese o CONTRATADO perceberá remuneração inferior ao salário mínimo profissional, conforme na Lei 
Federal nº 4.950-A de 22 de abril de 1966.
Parágrafo 4º - No caso de atraso nos pagamentos, a CONTRATANTE estará automaticamente em mora, arcando com juros de 1% (um por 
cento) ao mês e multa de 10% (dez por cento), facultado ao(a) CONTRATADO(a) a rescisão do contrato nos termos do parágrafo 
primeiro da cláusula sexta, sem prejuízo da cobrança judicial do débito pela via executiva judicial.
Parágrafo único – No caso de atraso nos pagamentos, a CONTRATANTE estará automaticamente em mora, arcando com juros de 1% (um 
por cento) ao mês e multa de 10% (dez por cento), facultado ao(à) CONTRATADO(A) a rescisão do contrato nos termos do parágrafo 
primeiro da cláusula sexta, sem prejuízo da cobrança judicial do débito pela via executiva judicial.

CLÁUSULA QUARTA – DO REAJUSTE DO PREÇO
O preço estipulado na cláusula anterior será reajustado a cada período de um ano, contado a partir da data de sua vigência, 
pelo IGPM da FGV ou por outro índice oficial que venha a substituí-lo ou, na ausência de substituto, pela média simples dos 
principais índices econômicos que apuram a inflação anual acumulada.
Nota: As partes poderão adotar livremente outro índice de reajuste que mais lhes convenha.

CLÁUSULA QUINTA – DA VIGÊNCIA
O presente contrato é firmado por prazo indeterminado, passando a vigorar a partir da data de sua assinatura, podendo ser 
rescindido por qualquer das partes caso não ocorra a aprovação do Responsável Técnico pelo Conselho de Arquitetura e Urbanismo e, 
neste caso, a CONTRATANTE pagará ao CONTRATADO o valor correspondente ao tempo de serviço efetivamente prestado, não se 
aplicando a cláusula sexta.
Nota: Caso haja efetiva prestação de serviços a partir da assinatura do contrato e independentemente da aprovação do Responsável 
Técnico pelo CAU/TO, a redação dessa cláusula deverá ser a seguinte:
O presente contrato é firmado por prazo indeterminado, passando a vigorar a partir da data de sua assinatura, podendo ser rescindido 
por qualquer das partes caso não ocorra a aprovação do Responsável Técnico pelo CAU/TO e, neste caso, a CONTRATANTE pagará ao(à) 
CONTRATADO(A) o valor correspondente ao tempo de serviço efetivamente prestado, não se aplicando a cláusula sexta. (2ª possibilidade)

CLÁUSULA SEXTA – DA RESCISÃO
O presente contrato poderá ser rescindido por qualquer uma das partes, mediante notificação a outra, por escrito, com prazo mínimo de 
30 (trinta) dias de antecedência, ressalvada a hipótese da parte denunciante optar por indenizar a outra do valor correspondente ao 
da prestação dos serviços referente ao período.
Parágrafo 1º - O contrato também poderá ser rescindido em caso de violação de quaisquer das cláusulas deste contrato, pela parte 
prejudicada, mediante denúncia imediata, sem prejuízo de eventual indenização cabível.
Parágrafo 2º - Qualquer tolerância das partes quanto ao descumprimento das cláusulas do presente contrato constituirá mera 
liberalidade, não configurando renúncia ou novação do contrato ou de suas cláusulas que poderão ser exigidos a qualquer tempo.

CLÁUSULA SÉTIMA – DO REGIME JURÍDICO
As partes declaram não haver entre si vínculo empregatício, tendo o(a) CONTRATADO(A) plena autonomia na prestação dos serviços, desde 
que prestados conforme as condições ora pactuadas e demais exigências legais do Conselho de Arquitetura e Urbanismo quanto à 
responsabilidade técnica. O(a) CONTRATADO(A) responde exclusivamente por eventual imprudência, negligência, imperícia ou dolo na 
execução de serviços que venham a causar qualquer dano à CONTRATANTE ou a terceiros, devendo responder regressivamente caso a 
CONTRATANTE seja responsabilizada judicialmente por tais fatos, desde que haja a denunciação da lide, salvo no caso de conduta da 
própria CONTRATANTE contrária à orientação dada pelo(a) CONTRATADO(A).
Parágrafo único – Tendo em vista a importância da responsabilidade técnica assumida, o(a) CONTRATADO(A) deverá fazer por escrito suas 
orientações à CONTRATANTE e aos seus prepostos, mediante protocolo de recebimento ou ciência.
Nota: Caso haja efetiva prestação de serviços na condição de FUNCIONÁRIO, a cláusula acima deverá ser alterada.

E por estarem justas e contratadas, na melhor forma de direito, as partes assinam o presente instrumento em 04 (quatro) vias originais 
e de igual teor e forma, na presença das testemunhas que também o assinam, dando tudo por bom, firme e valioso.

                                                    Mafra, 07 de novembro de 2021
                    </pre>
                </div>
                <div class="modal-footer align-items-center justify-content-center">
                    <span><strong>Abaixo, insira sua data de nascimento e selecione uma das opções (você só poderá selecionar uma vez)</strong></span>
                    <a href="/crudSimulacao/requisicoes/minhasReq.php" role="button" class="btn btn-danger col-md-3" data-dismiss="modal">Recusar</a>
                    <div class="form-group col-md-3">
                        <label for="inputNasc">Informe sua data de nascimento:</label>
                        <input type="date" class="form-control" id="inputNasc">
                    </div>
                    <a href="/crudSimulacao/simulacoes/formaPagamento.php" role="button" class="btn btn-success col-md-3">Aceitar</a>
                </div>
            </div>
        </div>
    </div>

    <style type="text/css">
        .container-titulo{
            background-color: #44245E;
            height: 9vh;
            padding-left: 2ch;
            padding-top: 2vh;
        }
    </style>
 

<?php
    include(FOOTER_TEMPLATE);
?>
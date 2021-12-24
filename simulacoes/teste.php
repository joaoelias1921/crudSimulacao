<!-- IMPORTANDO O HEADER -->
<?php 
  require_once('../config.php');
  include(HEADER_TEMPLATE2); 
?>

    <body>
        <div class="container-info">
            <div class="card form-row">
                <div class="progress">
                    <div id="progresso" class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">teste</div>
                </div>
            </div>                                
        </div>
        <br><br>
        <button class="btn btn-success" onclick="aumentaProgresso()">Progresso</button>
    </body>

    <script>
        function aumentaProgresso() {
            let elem = document.getElementById("progresso");

            if(elem.style.width == "25%"){
                elem.style.width = 50 + "%";
                elem.classList = "bg-success";                
            }else if(elem.style.width == "50%"){
                elem.style.width = 75 + "%";
                elem.classList = "bg-info";                
            }else if(elem.style.width == "75%"){
                elem.style.width = 100 + "%";
                elem.classList = "bg-danger";                
            }
        }    
    </script>
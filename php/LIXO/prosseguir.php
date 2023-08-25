<html>
    <head>
        <?php include "./header.php"; ?>
    </head>

    <body>         
        <div class="top">
            </br>
        </div>

        <div class="middle">
            <div id="home-dashboard">
                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        $CPF = $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    echo $CPF;
                ?>
                
                <script>
                    
                    var cpf = "<?php
                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                    ?>" 

                    function carregar(pagina){
                        
                        $("#home-dashboard").load(pagina);
                    }

                    carregar('./anamnese-form2.php');

                </script>
                

                




                <!--

                    <div id="prosseguir">
                        <div id="btn-anamnese2" class="btn-home" onclick="carregar('./anamnese-form2.php')" ><p>Preencher dados de anamnese</p></div>

                        <div id="btn-sair" class="btn-home" onclick="carregar('./index.php')" ><p>Sair</p></div>
                    </div>

                -->
            </div> 
        </div>

        <div class="footer">
            </br>
        </div>   
    </body>
</html>
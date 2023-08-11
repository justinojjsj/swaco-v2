<?php
	session_start();
	include_once('conexao.php');
	$sql = "SELECT * FROM dados_paciente ORDER BY nome ASC";
	$result = $conn->query($sql);
?>

<html>
	<head>

		<?php include "./header.php"; ?>

		<style>
			h1{
				color: #ffffff;
				font-family: 'Bradley Hand', cursive;
				font-size: 50px;
			}

			.table-bg{
				background: rgba(0,0,0,0.7);
				border-radius: 15px 15px 0 0;
			}
        </style>

        <script>
            //Apresenta a pesquisa dinamicamente a medida que digita. No personalizado.js está o script que apaga a pagina corrente

            $(document).ready(function(){    
                
                $("#pesquisa").keyup(function(){
                    $("#home-editar").load('home-pesquisar.php');
                });
            });
            
        </script>
        

	</head>

	<body>
            <?php include "./msg-alertas.php"; ?>       

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

                <a class="navbar-brand" href="#">PACIENTES</a>
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                                <button type="button" class="btn btn-info" style='width:150px;'><a href="../index.php" style="text-decoration:none; color:white;">Página inicial</a></button>		
                        </li>
 
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                            
                            <form method="POST" id="form-pesquisa" action="">
                                <p style="font-size:18px; color:white;">Pesquisa:</p>
                                <div class="form-row">
                                    <div class="col-6">
                                        <input style="font-size:12px; color:black; width: 600px; margin-left:10px;" type="search" name="pesquisa" id="pesquisa" class="form-control mr-sm-2" placeholder="Nome, CPF, Celular, E-mail, Estado Civil, Gênero, Convênio, Bairro, Cidade ou Estado">
                                    </div>
                                </div>
                            </form>
                    </form>
                </div>
            </nav>

            <div id="home-editar">

                <ul class="resultado">

                </ul>

                <?php include "./home-padrao.php"; ?>

            </div> 
	</body>

    <script>

        var secao = "<?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>" 

        var container_sucesso = document.querySelector('#msg-alert-sucesso');
        var container_erro = document.querySelector('#msg-alert-erro');

        var container_sucesso_apagar = document.querySelector('#msg-alert-sucesso-apagar');
        var container_erro_apagar = document.querySelector('#msg-alert-erro-apagar');

        function exibir(info){
            if(info == "sucesso"){
                container_sucesso.style.display = 'block';  
            }else if(info == "erro"){
                container_erro.style.display = 'block';  
            }else if(info == "sucesso_apagar"){
                container_sucesso_apagar.style.display = 'block';
            }else if(info == "erro_apagar"){
                container_erro_apagar.style.display = 'block';  
            }
        }

        function apagar(info){
            container_sucesso.style.display = 'none';
            container_erro.style.display = 'none';
            container_sucesso_apagar.style.display = 'none';
            container_sucesso_apagar.style.display = 'none';
        }

        exibir(secao);
        setTimeout(apagar, 2500);

    </script>
</html>
<?php
    session_start();
    include_once("conexao.php");


    if(filter_input(INPUT_GET, 'id_pac')){
        $id_pac = filter_input(INPUT_GET, 'id_pac');
        $result_usuario = "SELECT * FROM events WHERE title = '$id_pac'";
    }

    //$id_pac = filter_input(INPUT_GET, 'id_pac', FILTER_SANITIZE_NUMBER_INT);
    //$result_usuario = "SELECT * FROM dados_paciente WHERE id_pac = '$id_pac'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);

    $data_inicio = date('d/m/Y H:i:s',strtotime($row_usuario['start']));
    $data_fim = date('d/m/Y H:i:s',strtotime($row_usuario['end']));
?>

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

            <div id="retorno">
                <a href="./consultas.php?nome=<?php echo $row_usuario['title']; ?>" class="linkum">
                    <div id="btn-return" class="btn-home" style="width: 115px; height: 115px;!importante"></div>                    
                </a>
            </div>

            <div id="information" class="form-group">
                </br>
                </br>
                <p> Edição da consulta <?php echo $row_usuario['id']; ?> do paciente <?php echo $row_usuario['title']; ?> </p> 
            </div>
            
            </br>

            <form method="POST"	action="./proc_edit_consulta.php">

                <input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>"> 

                <input type="hidden" name="title" value="<?php echo $row_usuario['title']; ?>"> 

                <div class="form-group">
                    <div class="question">
                        <p2>Data e Hora de Início</p2>
                    </div>

                    <div class="answer">                        
                        <input type="text" name="start" value="<?php echo $data_inicio; ?>" maxlength="20" onkeypress="formatar_mascara(this,'##/##/#### ##:##:##')">
                    </div>
                </div>

                </br>

                <div class="form-group">
                    <div class="question">
                        <p2>Data e Hora Final</p2>
                    </div>

                    <div class="answer">                        
                        <input type="text" name="end" value="<?php echo $data_fim; ?>" maxlength="20" onkeypress="formatar_mascara(this,'##/##/#### ##:##:##')">
                    </div>
                </div>

                </br>

                <div class="form-group">
                    <div class="question">
                        <p2>Descrição</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="url" value="<?php echo $row_usuario['url']; ?>"/>
                    </div>
                </div>

                </br>

                <input type="submit" id="btn-cadastro" class="btn-home" style="color: white; font-weight:800;" value="Cadastrar" name="enviar"><p></p></input>

            </form>

        </div>
    </div>

    <div class="footer">
        </br>
    </div>   

</body>

</html>
<?php
    session_start();
    include_once("conexao.php");


    //$CPF = filter_input(INPUT_GET, 'CPF');
    //$CPF = filter_input(INPUT_POST, 'CPF');

    if(filter_input(INPUT_GET, 'CPF')){
        $CPF = filter_input(INPUT_GET, 'CPF');
    }elseif(filter_input(INPUT_POST, 'CPF')){
        $CPF = filter_input(INPUT_POST, 'CPF');
    }else{
        echo "USUARIO NAO POSSUI ANAMNESE CADASTRADA";
    }

    $result_usuario = "SELECT * FROM dados_anamnese WHERE CPF = '$CPF'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);

    if(mysqli_num_rows($resultado_usuario)==0){      
        $_SESSION['msg'] = $CPF;
        $_SESSION['msg2'] = "cpf_nop";  
		header("Location: ../cadastrar_dados/cadastro_anamnese.php");	
    }

    $result_usuario2 = "SELECT * FROM dados_paciente WHERE CPF = '$CPF'";
    $resultado_usuario2 = mysqli_query($conn, $result_usuario2);
    $row_usuario2 = mysqli_fetch_assoc($resultado_usuario2);
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

            <?php include "return-menu.php"; ?>

            <div id="information" class="form-group">
                </br>
                </br>
                </br>
                <p> Edição da Ficha de Anamnese </p> 
            </div>
            
            </br>

            <form method="POST"	action="./proc_edit_anamnese.php">

                <input type="hidden" name="id_anamnese" value="<?php echo $row_usuario['id_anamnese']; ?>">

                <div class="form-group">
                    <div class="question">
                        <p2>Nome do Paciente</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="nome" placeholder="Seu nome" value="<?php echo $row_usuario2['nome']; ?>" readonly/>
                    </div>
                </div>

                </br>

                <div class="form-group">
                    <div class="question">
                        <p2>CPF</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="CPF" placeholder="123.456.789-11" value="<?php echo $row_usuario['CPF']; ?>" maxlength="11" readonly/>
                    </div>
                </div>

                </br>
                
                <!-- INÍCIO DA QUESTÃO: QUEIXA PRINCIPAL --->

                <div class="form-group">
                    <div class="question">
                        <p2>Queixa principal</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="problem" placeholder="Exemplo: Dor, procedimento estético" value="<?php echo $row_usuario['problem']; ?>"/>
                    </div>
                </div>

                <!-- FIM DA QUESTÃO: QUEIXA PRINCIPAL --->

                </br>

                <!-- INÍCIO DA QUESTÃO: ULTIMA VISITA DENTISTA --->

                <div class="form-group">
                    <div class="question">
                        <p2>Última visita ao dentista</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="visit" placeholder="Exemplo: 2 meses" value="<?php echo $row_usuario['visit']; ?>"/>
                    </div>
                </div>

                <!-- FIM DA QUESTÃO: ULTIMA VISITA DENTISTA --->

                </br>   

                <!-- INÍCIO DA QUESTÃO: TRATAMENTO MEDICO --->

                <div id="q-proc" class="form-group">
                    <div class="question">
                        <p2>Está sob tratamento médico?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="medical" value="<?php echo $row_usuario['medical']; ?>"/>
                    </div>
                </div>

                <!-- FIM DA QUESTÃO: TRATAMENTO MEDICO --->

                </br> 

                <!-- INÍCIO DA QUESTÃO: ALÉRGICO --->

                <div id="q-allergies" class="form-group resposta-dupla">
                    <div class="question">
                        <p2>É alérgico?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="allergies" value="<?php echo $row_usuario['allergies']; ?>"/>
                    </div>

                    <div class="answer">
                        <div class="question">
                            <p2>A que?</p2>
                        </div>
                        <input type="text" name="allergies_desc" value="<?php echo $row_usuario['allergies_desc']; ?>"/>
                    </div>
                </div>

                <!-- FIM DA QUESTÃO: ALÉRGICO A MEDICAMENTO --->

                </br>   

                <!-- INÍCIO DA QUESTÃO: CARDIACO  --->

                <div id="q-card" class="form-group resposta-dupla">
                    <div class="question">
                        <p2>Tem problema cardíaco?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="heart" value="<?php echo $row_usuario['heart']; ?>"/>
                    </div>

                    <div class="answer">
                        <div class="question">
                            <p2>Qual?</p2>
                        </div>
                        <input type="text" name="heart_desc" value="<?php echo $row_usuario['heart_desc']; ?>"/>
                    </div>
                </div>

                <!-- FIM DA QUESTÃO: CARDIACO --->

                </br>   

                <!-- INÍCIO DA QUESTÃO: BENZETACIL --->

                <div id="q-benz" class="form-group resposta-dupla">
                    <div class="question">
                        <p2>Já tomou benzetacil?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="benz" value="<?php echo $row_usuario['benz']; ?>"/>
                    </div>

                    <div class="answer">
                        <div class="question">
                            <p2>Teve problema?</p2>
                        </div>
                        <input type="text" name="benz_problem" value="<?php echo $row_usuario['benz_problem']; ?>"/>
                    </div>
                </div>

                <!-- FIM DA QUESTÃO: BENZETACIL --->

                </br>   

                <!-- INÍCIO DA QUESTÃO: DIPIRONA --->

                <div id="q-dip" class="form-group resposta-dupla">
                    <div class="question">
                        <p2>Já tomou dipirona?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="dipirona" value="<?php echo $row_usuario['dipirona']; ?>"/>
                    </div>

                    <div class="answer">
                        <div class="question">
                            <p2>Teve problema?</p2>
                        </div>
                        <input type="text" name="dip_problem" value="<?php echo $row_usuario['dip_problem']; ?>"/>
                    </div>
                </div>

                <!-- FIM DA QUESTÃO: DIPIRONA --->

                </br>

                <!-- INÍCIO DA QUESTÃO: PRESSAO --->

                <div class="form-group">
                    <div class="question">
                        <p2>Pressão alterial</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="pressure" placeholder="Exemplo: Normal"  value="<?php echo $row_usuario['pressure']; ?>"/>
                    </div>
                </div>

                <!-- FIM DA QUESTÃO: PRESSAO --->

                </br>   

                <!-- INÍCIO DA QUESTÃO: REMEDIO PRESSAO --->

                <div id="q-press" class="form-group resposta-dupla">
                    <div class="question">
                        <p2>Toma remédio para pressão?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="press_med" value="<?php echo $row_usuario['press_med']; ?>"/>
                    </div>

                    <div class="answer">
                        <div class="question">
                            <p2>Qual?</p2>
                        </div>
                        <input type="text" name="press_medicine" value="<?php echo $row_usuario['press_medicine']; ?>"/>
                    </div>
                </div>

                <!-- FIM DA QUESTÃO: REMEDIO PRESSAO --->

                </br>   

                <!-- INÍCIO DA QUESTÃO: RENAL --->

                <div id="q-renal" class="form-group resposta-dupla">
                    <div class="question">
                        <p2>Tem problema renal?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="renal" value="<?php echo $row_usuario['renal']; ?>"/>
                    </div>

                    <div class="answer">
                        <div class="question">
                            <p2>Qual?</p2>
                        </div>
                        <input type="text" name="renal_problem" value="<?php echo $row_usuario['renal_problem']; ?>"/>
                    </div>
                </div>

                <!-- FIM DA QUESTÃO: RENAL --->

                </br>   

                <!-- INÍCIO DA QUESTÃO: DIABETE --->

                <div id="q-diabete" class="form-group">
                    <div class="question">
                        <p2>Tem diabetes?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="diabete" value="<?php echo $row_usuario['diabete']; ?>"/>
                    </div>

                </div>

                <!-- FIM DA QUESTÃO: DIABETE --->

                </br>   

                <!-- INÍCIO DA QUESTÃO: HEPATITE  --->

                <div id="q-hepatite" class="form-group">
                    <div class="question">
                        <p2>Tem ou teve hepatite?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="hepatite" value="<?php echo $row_usuario['hepatite']; ?>"/>
                    </div>

                </div>

                <!-- FIM DA QUESTÃO: HEPATITE --->

                </br>   

                <!-- INÍCIO DA QUESTÃO: ANESTESIA --->

                <div id="q-anest" class="form-group resposta-dupla">
                    <div class="question">
                        <p2>Já tomou anestesia?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="anest" value="<?php echo $row_usuario['anest']; ?>"/>
                    </div>

                    <div class="answer">
                        <div class="question">
                            <p2>Teve problema?</p2>
                        </div>
                        <input type="text" name="anest_problem" value="<?php echo $row_usuario['anest_problem']; ?>"/>
                    </div>
                </div>

                </div>

                <!-- FIM DA QUESTÃO: ANESTESIA --->

                </br>   

                <!-- INÍCIO DA QUESTÃO: PROTESE --->

                <div id="q-protese" class="form-group">
                    <div class="question">
                        <p2>Usa alguma prótese pelo corpo?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="protese" value="<?php echo $row_usuario['protese']; ?>"/>
                    </div>

                </div>

                <!-- FIM DA QUESTÃO: PROTESE --->

                </br>   

                <!-- INÍCIO DA QUESTÃO: MARCA-PASSO --->

                <div id="q-marcap" class="form-group">
                    <div class="question">
                        <p2>Tem marca passo?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="marcap" value="<?php echo $row_usuario['marcap']; ?>"/>
                    </div>

                </div>

                <!-- FIM DA QUESTÃO: MARCA-PASSO --->

                </br>   

                <!-- INÍCIO DA QUESTÃO: TRANSFUSAO --->

                <div id="q-transf" class="form-group">
                    <div class="question">
                        <p2>Já precisou de transfusão de sangue?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="transf" value="<?php echo $row_usuario['transf']; ?>"/>
                    </div>
                </div>

                <!-- FIM DA QUESTÃO: TRANSFUSAO --->

                </br>   

                <!-- INÍCIO DA QUESTÃO: DROGA --->

                <div id="q-droga" class="form-group">
                    <div class="question">
                        <p2>Usa alguma droga?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="droga" value="<?php echo $row_usuario['droga']; ?>"/>
                    </div>

                </div>

                <!-- FIM DA QUESTÃO: DROGA --->

                </br>   

                <!-- INÍCIO DA QUESTÃO: FUMA --->

                <div id="q-fuma" class="form-group">
                    <div class="question">
                        <p2>Fuma?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="fuma" value="<?php echo $row_usuario['fuma']; ?>"/>
                    </div>

                </div>

                <!-- FIM DA QUESTÃO: FUMA --->

                </br>   

                <!-- INÍCIO DA QUESTÃO: GRAVIDA --->

                <div id="q-gravida" class="form-group">
                    <div class="question">
                        <p2>Está grávida?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="gravida" value="<?php echo $row_usuario['gravida']; ?>"/>
                    </div>

                </div>

                <!-- FIM DA QUESTÃO: GRAVIDA --->

                </br>   

                <!-- INÍCIO DA QUESTÃO: ESCOVAÇÃO --->

                <div class="form-group">
                    <div class="question">
                        <p2>Quantas vezes escova os dentes ao dia?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="escovacao" placeholder="Exemplo: 3" value="<?php echo $row_usuario['escovacao']; ?>"/>
                    </div>
                </div>

                <!-- FIM DA QUESTÃO: ESCOVAÇÃO --->

                </br>   

                <!-- INÍCIO DA QUESTÃO: FIO DENTAL --->

                <div class="form-group">
                    <div class="question">
                        <p2>Quantas vezes usa o fio dental ao dia?</p2>
                    </div>

                    <div class="answer">
                        <input type="text" name="fio_dental" placeholder="Exemplo: 3" value="<?php echo $row_usuario['fio_dental']; ?>"/>
                    </div>
                </div>

                <!-- FIM DA QUESTÃO: FIO DENTAL --->

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
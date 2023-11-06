<?php
    session_start();
    //error_reporting(0);
?>

<html>
    
    <?php include "../msg-alertas-home.php"; ?>       
    

    <head>
        <?php 
            include "./header.php"; 

            if(isset($_SESSION['msg'])){
                $CPF = $_SESSION['msg'];
                //echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }else{
                $CPF = 'Digite seu CPF (somente com números)';
            } 
        ?>

        <!-- Acessibilidade -->
        <link rel="alternate stylesheet" href="../../css/escuro.css" title="2">
        <link rel="alternate stylesheet" href="../../css/claro.css" title="1">
        <script src="https://code.jquery.com/jquery-1.11.3.js"></script>        
        <script type="text/javascript" src="../../js/contraste.js"></script>
    </head>

    <body>         
        <div class="top">
            </br>
        </div>

        <div class="middle">
            
            <div id="home-dashboard">

                <div class="line">

                    <form method="POST"	action="./verifica_cadastro_anamnese.php">

                        <div id="menu-topo">
                            <?php include "./return-menu.php"; ?>
                            <?php include "./btn-contraste.php"; ?>
                        </div>

                        <!-- INÍCIO DA APRESENTACAO --->

                        <div id="information" class="form-group">
                            <p> Ficha de Anamnese </p> 
                            <p> Prontuário </p> 
                            <p2> Preencha os dados corretamente </br>
                                As informações serão armazenadas de forma segura com o dentista</br>
                            </p2>   

                        </div>
                        
                        <!-- FIM DA APRESENTACAO --->

                        </br>

                        <!-- INÍCIO DO CAMPO CPF --->

                        <div class="form-group">
                            <div class="question">
                                <p2>CPF</p2>
                            </div>

                            <div class="answer">
                                <input type="text" id="CPF" name="CPF" value="<?php echo $CPF; ?>" onfocus="this.value='';" required="" maxlength="11" onkeypress="formatar_mascara(this,'###########')"/>
                            </div>
                        </div>

                        <!-- FIM DO CAMPO CPF --->

                        </br>

                        <!-- INÍCIO DA QUESTÃO: QUEIXA PRINCIPAL --->

                        <div class="form-group">
                            <div class="question">
                                <p2>Qual a sua queixa principal?</p2>
                            </div>

                            <div class="answer">
                                <input type="text" name="problem" placeholder="Exemplo: Dor, procedimento estético"/>
                            </div>
                        </div>

                        <!-- FIM DA QUESTÃO: QUEIXA PRINCIPAL --->

                        </br>

                        <!-- INÍCIO DA QUESTÃO: ULTIMA VISITA DENTISTA --->

                        <div class="form-group">
                            <div class="question">
                                <p2>Qual a foi sua última visita ao dentista?</p2>
                            </div>

                            <div class="answer">
                                <input type="text" name="visit" placeholder="Exemplo: 2 meses"/>
                            </div>
                        </div>

                        <!-- FIM DA QUESTÃO: ULTIMA VISITA DENTISTA --->

                        </br>   

                        <!-- INÍCIO DA QUESTÃO: TRATAMENTO MEDICO --->

                        <div id="q-proc" class="form-group">
                            <div class="question">
                                <p2>Está sob tratamento médico?</p2>
                            </div>

                            <div class="answer-radio">

                                <input type="radio" name="medical" id="q-proc-med-y" class="input-hidden" value="sim" />
                                <label for="q-proc-med-y">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="medical" id="q-proc-med-n" class="input-hidden" value="nao" />
                                <label for="q-proc-med-n">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                                
                            </div>

                        </div>

                        <!-- FIM DA QUESTÃO: TRATAMENTO MEDICO --->

                        </br> 


                        <!-- INÍCIO DA QUESTÃO: ALÉRGICO --->

                        <div id="q-allergies" class="form-group">
                            <div class="question">
                                <p2>Você tem alergia?</p2>
                            </div>

                            <div class="answer-radio">

                                <input type="radio" name="allergies" id="q-allergies-yes" class="input-hidden"  onclick="function()" value="sim" />
                                <label for="q-allergies-yes">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="allergies" id="q-allergies-no" class="input-hidden" value="nao" />
                                <label for="q-allergies-no">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                                
                            </div>

                            <div id="q-allergies-hidden">
                                <div class="question">
                                    <p2>A que?</p2>
                                </div>

                                <div class="answer">
                                    <input type="text" name="allergies_desc" placeholder="Exemplo: Dipirona"/>
                                </div>
                            </div>
                        </div>

                        <!-- FIM DA QUESTÃO: ALÉRGICO A MEDICAMENTO --->

                        </br>   

                        <!-- INÍCIO DA QUESTÃO: CARDIACO  --->

                        <div id="q-card" class="form-group">
                            <div class="question">
                                <p2>Você tem problema cardíaco?</p2>
                            </div>

                            <div class="answer-radio">

                                <input type="radio" name="heart" id="q-card-yes" class="input-hidden"  onclick="function()" value="sim"/>
                                <label for="q-card-yes">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="heart" id="q-card-no" class="input-hidden" value="nao"/>
                                <label for="q-card-no">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                                
                            </div>

                            <div id="q-card-hidden">
                                <div class="question">
                                    <p2>Qual?</p2>
                                </div>

                                <div class="answer">
                                    <input type="text" name="heart_desc" placeholder="Exemplo: Insuficiência cardíaca"/>
                                </div>
                            </div>
                        </div>

                        <!-- FIM DA QUESTÃO: CARDIACO --->

                        </br>   

                        <!-- INÍCIO DA QUESTÃO: BENZETACIL --->

                        <div id="q-benz" class="form-group">
                            <div class="question">
                                <p2>Você já tomou benzetacil?</p2>
                            </div>

                            <div class="answer-radio">

                                <input type="radio" name="benz" id="q-benz-yes" class="input-hidden"  onclick="function()" value="sim"/>
                                <label for="q-benz-yes">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="benz" id="q-benz-no" class="input-hidden" value="nao"/>
                                <label for="q-benz-no">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                            </div>    

                            <div id="q-benz-hidden" class="answer-radio">

                                <div class="question">
                                    <p2>Teve problema?</p2>
                                </div>    

                                <input type="radio" name="benz_problem" id="q-benzp-yes" class="input-hidden" value="sim"/>
                                <label for="q-benzp-yes">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="benz_problem" id="q-benzp-no" class="input-hidden" value="nao"/>
                                <label for="q-benzp-no">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                            </div>
                        </div>

                        <!-- FIM DA QUESTÃO: BENZETACIL --->

                        </br>   

                        <!-- INÍCIO DA QUESTÃO: DIPIRONA --->

                        <div id="q-dip" class="form-group">
                            <div class="question">
                                <p2>Você já tomou dipirona?</p2>
                            </div>

                            <div class="answer-radio">

                                <input type="radio" name="dipirona" id="q-dip-yes" class="input-hidden"  onclick="function()" value="sim"/>
                                <label for="q-dip-yes">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="dipirona" id="q-dip-no" class="input-hidden" value="nao"/>
                                <label for="q-dip-no">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                            </div>      

                            <div id="q-dip-hidden" class="answer-radio">

                                <div class="question">
                                    <p2>Teve problema?</p2>
                                </div> 

                                <input type="radio" name="dip_problem" id="q-dip-p-yes" class="input-hidden" value="sim"/>
                                <label for="q-dip-p-yes">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="dip_problem" id="q-dip-p-no" class="input-hidden" value="nao"/>
                                <label for="q-dip-p-no">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                            </div>
                        </div>

                        <!-- FIM DA QUESTÃO: DIPIRONA --->

                        </br>

                        <!-- INÍCIO DA QUESTÃO: PRESSAO --->

                        <div class="form-group">
                            <div class="question">
                                <p2>Como é sua pressão alterial?</p2>
                            </div>

                            <div class="answer">
                                <input type="text" name="pressure" placeholder="Exemplo: Normal"/>
                            </div>
                        </div>

                        <!-- FIM DA QUESTÃO: PRESSAO --->

                        </br>   

                        <!-- INÍCIO DA QUESTÃO: REMEDIO PRESSAO --->

                        <div id="q-press" class="form-group">
                            <div class="question">
                                <p2>Você toma remédio para pressão?</p2>
                            </div>

                            <div class="answer-radio">

                                <input type="radio" name="press_med" id="q-press-yes" class="input-hidden"  onclick="function()" value="sim"/>
                                <label for="q-press-yes">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="press_med" id="q-press-no" class="input-hidden" value="nao"/>
                                <label for="q-press-no">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                                
                            </div>

                            <div id="q-press-hidden">
                                <div class="question">
                                    <p2>Qual?</p2>
                                </div>

                                <div class="answer">
                                    <input type="text" name="press_medicine" placeholder="" />
                                </div>
                            </div>
                        </div>

                        <!-- FIM DA QUESTÃO: REMEDIO PRESSAO --->

                        </br>   

                        <!-- INÍCIO DA QUESTÃO: RENAL --->

                        <div id="q-renal" class="form-group">
                            <div class="question">
                                <p2>Você tem problema renal?</p2>
                            </div>

                            <div class="answer-radio">

                                <input type="radio" name="renal" id="q-renal-yes" class="input-hidden"  onclick="function()" value="sim"/>
                                <label for="q-renal-yes">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="renal" id="q-renal-no" class="input-hidden" value="nao"/>
                                <label for="q-renal-no">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                                
                            </div>

                            <div id="q-renal-hidden">
                                <div class="question">
                                    <p2>Qual?</p2>
                                </div>

                                <div class="answer">
                                    <input type="text" name="renal_problem" placeholder=""/>
                                </div>
                            </div>
                        </div>

                        <!-- FIM DA QUESTÃO: RENAL --->

                        </br>   

                        <!-- INÍCIO DA QUESTÃO: DIABETE --->

                        <div id="q-diabete" class="form-group">
                            <div class="question">
                                <p2>Você tem diabetes?</p2>
                            </div>

                            <div class="answer-radio">

                                <input type="radio" name="diabete" id="q-diabete-y" class="input-hidden" value="sim"/>
                                <label for="q-diabete-y">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="diabete" id="q-diabete-n" class="input-hidden" value="nao"/>
                                <label for="q-diabete-n">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                                
                            </div>

                        </div>

                        <!-- FIM DA QUESTÃO: DIABETE --->

                        </br>   

                        <!-- INÍCIO DA QUESTÃO: HEPATITE  --->

                        <div id="q-hepatite" class="form-group">
                            <div class="question">
                                <p2>Você tem ou teve hepatite?</p2>
                            </div>

                            <div class="answer-radio">

                                <input type="radio" name="hepatite" id="q-hepatite-y" class="input-hidden" value="sim"/>
                                <label for="q-hepatite-y">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="hepatite" id="q-hepatite-n" class="input-hidden" value="nao"/>
                                <label for="q-hepatite-n">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                                
                            </div>

                        </div>

                        <!-- FIM DA QUESTÃO: HEPATITE --->

                        </br>   

                        <!-- INÍCIO DA QUESTÃO: ANESTESIA --->

                        <div id="q-anest" class="form-group">
                            <div class="question">
                                <p2>Você já tomou anestesia?</p2>
                            </div>

                            <div class="answer-radio">

                                <input type="radio" name="anest" id="q-anest-yes" class="input-hidden"  onclick="function()" value="sim"/>
                                <label for="q-anest-yes">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="anest" id="q-anest-no" class="input-hidden" value="nao"/>
                                <label for="q-anest-no">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                            </div>    
                        
                            <div id="q-anest-hidden" class="answer-radio">

                                <div class="question">
                                    <p2>Teve problema?</p2>
                                </div>    

                                <input type="radio" name="anest_problem" id="q-anestp-yes" class="input-hidden" value="sim"/>
                                <label for="q-anestp-yes">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="anest_problem" id="q-anestp-no" class="input-hidden" value="nao"/>
                                <label for="q-anestp-no">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                            </div>
                        </div>

                        <!-- FIM DA QUESTÃO: ANESTESIA --->

                        </br>   

                        <!-- INÍCIO DA QUESTÃO: PROTESE --->

                        <div id="q-protese" class="form-group">
                            <div class="question">
                                <p2>Você usa alguma prótese pelo corpo?</p2>
                            </div>

                            <div class="answer-radio">

                                <input type="radio" name="protese" id="q-protese-y" class="input-hidden" value="sim"/>
                                <label for="q-protese-y">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="protese" id="q-protese-n" class="input-hidden" value="nao"/>
                                <label for="q-protese-n">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                                
                            </div>

                        </div>

                        <!-- FIM DA QUESTÃO: PROTESE --->

                        </br>   

                        <!-- INÍCIO DA QUESTÃO: MARCA-PASSO --->

                        <div id="q-marcap" class="form-group">
                            <div class="question">
                                <p2>Você tem marca passo?</p2>
                            </div>

                            <div class="answer-radio">

                                <input type="radio" name="marcap" id="q-marcap-y" class="input-hidden" value="sim"/>
                                <label for="q-marcap-y">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="marcap" id="q-marcap-n" class="input-hidden" value="nao"/>
                                <label for="q-marcap-n">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                                
                            </div>

                        </div>

                        <!-- FIM DA QUESTÃO: MARCA-PASSO --->

                        </br>   

                        <!-- INÍCIO DA QUESTÃO: TRANSFUSAO --->

                        <div id="q-transf" class="form-group">
                            <div class="question">
                                <p2>Você já precisou de transfusão de sangue?</p2>
                            </div>

                            <div class="answer-radio">

                                <input type="radio" name="transf" id="q-transf-y" class="input-hidden" value="sim"/>
                                <label for="q-transf-y">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="transf" id="q-transf-n" class="input-hidden" value="nao"/>
                                <label for="q-transf-n">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                                
                            </div>

                        </div>

                        <!-- FIM DA QUESTÃO: TRANSFUSAO --->

                        </br>   

                        <!-- INÍCIO DA QUESTÃO: DROGA --->

                        <div id="q-droga" class="form-group">
                            <div class="question">
                                <p2>Você usa alguma droga?</p2>
                            </div>

                            <div class="answer-radio">

                                <input type="radio" name="droga" id="q-droga-y" class="input-hidden" value="sim"/>
                                <label for="q-droga-y">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="droga" id="q-droga-n" class="input-hidden" value="nao"/>
                                <label for="q-droga-n">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                                
                            </div>

                        </div>

                        <!-- FIM DA QUESTÃO: DROGA --->

                        </br>   

                        <!-- INÍCIO DA QUESTÃO: FUMA --->

                        <div id="q-fuma" class="form-group">
                            <div class="question">
                                <p2>Você já fuma?</p2>
                            </div>

                            <div class="answer-radio">

                                <input type="radio" name="fuma" id="q-fuma-y" class="input-hidden" value="sim"/>
                                <label for="q-fuma-y">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="fuma" id="q-fuma-n" class="input-hidden" value="nao"/>
                                <label for="q-fuma-n">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                                
                            </div>

                        </div>

                        <!-- FIM DA QUESTÃO: FUMA --->

                        </br>   

                        <!-- INÍCIO DA QUESTÃO: GRAVIDA --->

                        <div id="q-gravida" class="form-group">
                            <div class="question">
                                <p2>Você está grávida?</p2>
                            </div>

                            <div class="answer-radio">

                                <input type="radio" name="gravida" id="q-gravida-y" class="input-hidden" value="sim"/>
                                <label for="q-gravida-y">
                                    <img src="../../images/btn-yes.png"  />
                                </label>

                                <input type="radio" name="gravida" id="q-gravida-n" class="input-hidden" value="nao"/>
                                <label for="q-gravida-n">
                                    <img src="../../images/btn-no.png"  />
                                </label>
                                
                            </div>

                        </div>

                        <!-- FIM DA QUESTÃO: GRAVIDA --->

                        </br>   

                        <!-- INÍCIO DA QUESTÃO: ESCOVAÇÃO --->

                        <div class="form-group">
                            <div class="question">
                                <p2>Quantas vezes você escova os dentes ao dia?</p2>
                            </div>

                            <div class="answer">
                                <input type="text" name="escovacao" placeholder="Exemplo: 3"/>
                            </div>
                        </div>

                        <!-- FIM DA QUESTÃO: ESCOVAÇÃO --->

                        </br>   

                        <!-- INÍCIO DA QUESTÃO: FIO DENTAL --->

                        <div class="form-group">
                            <div class="question">
                                <p2>Quantas vezes você usa o fio dental ao dia?</p2>
                            </div>

                            <div class="answer">
                                <input type="text" name="fio_dental" placeholder="Exemplo: 3"/>
                            </div>
                        </div>

                        <!-- FIM DA QUESTÃO: FIO DENTAL --->

                        </br>   

                        <input type="submit" id="btn-cadastro-anamnese" class="btn-home" style="color: white; font-weight:800;" value="Cadastrar" name="enviar"><p></p></input>

                    </form>
                </div>

            </div> 
        </div>

        <div class="footer">
            </br>
        </div>   

        <script type="text/javascript" src="../../js/question-hidden.js"></script>  

    </body>

</html>
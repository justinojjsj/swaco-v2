<html>

    <!-- PARA FUNCIONAR ALERT
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"> 
    <script type="text/javascript" src="../js/jquery-1.8.2.js"></script>      
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 

    <style>
        .form-group p{
            margin: 0px;
        }

        .btn-home{
            padding: 55px;
        }

        #btn-return{
            width: 100px;
            height: 100px;
        }

    </style>
    -->

    <?php include "anamnese-menu.php"; ?>

    <div id="information" class="form-group">
        <p> Ficha de Anamnese </p> 
        <p> Dados Pessoais </p> 
        <p2> Preencha os dados corretamente </br>
            As informações serão armazenadas de forma segura com o dentista</br>
        </p2>   
    </div>
    
    </br>

    <form method="POST"	action="./verifica_cad_paciente.php">

        <div class="form-group">
            <div class="question">
                <p2>Qual o seu nome completo?</p2>
                </br>
                <p3>Digite seu nome completo</p3>
            </div>

            <div class="answer">
                <input type="text" name="nome" placeholder="Seu nome" required=""/>
            </div>
        </div>

        </br>

        <div class="form-group">
            <div class="question">
                <p2>Qual o seu celular de contato?</p2>
            </div>

            <div class="answer">
                <input type="text" name="celular" placeholder="12 98102-6589" required="" maxlength="14" onkeypress="formatar_mascara(this,'## #####-####')"/>
            </div>
        </div>

        </br>

        <div class="form-group">
            <div class="question">
                <p2>Qual a sua data de nascimento?</p2>
            </div>

            <div class="answer">
                <input type="text" name="idade" placeholder="01/01/2001" required="" maxlength="10" onkeypress="formatar_mascara(this,'##/##/####')"/>
            </div>
        </div>

        </br>

        <div class="form-group">
            <div class="question">
                <p2>Qual o seu CPF?</p2>
            </div>

            <div class="answer">
                <input type="text" name="CPF" placeholder="123.456.789-11" required="" maxlength="14" onkeypress="formatar_mascara(this,'###.###.###-##')"/>
            </div>
        </div>

        </br>

        <div class="form-group">
            <div class="question">
                <p2>Qual o seu estado civil?</p2>
            </div>

            <div class="answer">
                <input type="text" name="estado_civil" placeholder="Exemplo: Solteiro(a)" />
            </div>
        </div>

        </br>

        <div class="form-group">
            <div class="question">
                <p2>Qual o seu e-mail?</p2>
            </div>

            <div class="answer">
                <input type="email" name="email" placeholder="email@provedor.com" required=""/>
            </div>
        </div>

        </br>

        <div class="form-group">
            <div class="question">
                <p2>Qual a sua profissão?</p2>
            </div>

            <div class="answer">
                <input type="text" name="work" placeholder="Exemplo: Professor" />
            </div>
        </div>

        </br>

        <div class="form-group">
            <div class="question">
                <p2>Qual o seu sexo?</p2>
            </div>

            <div class="answer-radio">

                <input type="radio" name="gender" id="gen-man" class="input-hidden" value="homem"/>
                <label for="gen-man">
                    <img src="../images/man.png" alt="I'm man" />
                </label>

                <input type="radio" name="gender" id="gen-woman" class="input-hidden" value="mulher"/>
                <label for="gen-woman">
                    <img src="../images/woman.png" alt="I'm woman" />
                </label>

                <input type="radio" name="gender" id="gen-other" class="input-hidden" value="outro"/>
                <label for="gen-other">
                    <img src="../images/other.png" alt="I'm other" />
                </label>
                
            </div>
        </div>

        </br>

        <div class="form-group">
            <div class="question">
                <p2>Qual o seu convênio?</p2>
            </div>

            <div class="answer">
                <input type="text" name="convenio" placeholder="Particular" required=""/>
            </div>
        </div>

        </br>

        <div class="form-address">
            <div class="question">
                <p2>Qual o seu endereço?</p2>
            </div>

            <div class="answer">
                <input type="text" name="CEP" id="cep" placeholder="CEP" required="" onblur="pesquisacep(this.value);" />
            </div>

            <div class="answer">
                <input type="text" name="ad_number" placeholder="Número da Casa ou Ap" required=""/>
            </div>

            <div class="answer">
                <input type="text" name="street" id="street" placeholder="Rua" required=""/>
            </div>

            <div class="answer">
                <input type="text" name="district" id="district" placeholder="Bairro" required=""/>
            </div>

            <div class="answer">
                <input type="text" name="city" id="city" placeholder="Cidade" required=""/>
            </div>

            <div class="answer">
                <input type="text" name="state" id="state" placeholder="Estado" required=""/>
            </div>

        </div>

        </br>

        <input type="submit" id="btn-cadastro" class="btn-home" style="color: white; font-weight:800;" value="Cadastrar" name="enviar"><p></p></input>

        <!--
        <script>
            $(document).ready(function(){
                $('#btn-cadastro').click(function(ev){
                    var href = $(this).attr('href');
                    if(!$('#confirm-delete').length){
                        $('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header bg-info text-white">ATENÇÃO<button type="submit" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Em seguida, preencha os dados de anamnese</div><div class="modal-footer"><button type="submit" class="btn btn-success" data-dismiss="modal">Confirmar</button></div></div></div></div>');
                    }
                    $('#dataComfirmOK').attr('href', href);
                    $('#confirm-delete').modal({show: true});
                    return false;
                });
            });
        </script>
        -->
    </form>

    



</html>
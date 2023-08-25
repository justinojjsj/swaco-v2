<html>

    <?php include "return-menu.php"; ?>

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
                <p2>Qual o seu CPF?</p2>
            </div>

            <div class="answer">
                <input type="text" name="CPF" placeholder="Somente números" required="" maxlength="11" onkeypress="formatar_mascara(this,'###########')"/>
            </div>
        </div>

        </br>

        <div class="form-group">
            <div class="question">
                <p2>Qual a sua data de nascimento?</p2>
            </div>

            <div class="answer">
                <input type="text" name="idade" placeholder="01/01/2001" maxlength="10" onkeypress="formatar_mascara(this,'##/##/####')"/>
            </div>
        </div>

        </br>

        <div class="form-group">
            <div class="question">
                <p2>Qual o seu celular de contato?</p2>
            </div>

            <div class="answer">
                <input type="text" name="celular" placeholder="12 98102-6589" maxlength="14" onkeypress="formatar_mascara(this,'## #####-####')"/>
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
                <input type="email" name="email" placeholder="email@provedor.com"/>
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
                    <img src="../images/man.png"/>
                </label>

                <input type="radio" name="gender" id="gen-woman" class="input-hidden" value="mulher"/>
                <label for="gen-woman">
                    <img src="../images/woman.png"/>
                </label>

                <input type="radio" name="gender" id="gen-other" class="input-hidden" value="outro" checked/>
                <label for="gen-other">
                    <img src="../images/other.png"/>
                </label>
                
            </div>
        </div>

        </br>

        <div class="form-group">
            <div class="question">
                <p2>Qual o seu convênio?</p2>
            </div>

            <div class="answer">
                <input type="text" name="convenio" placeholder="Particular"/>
            </div>
        </div>

        </br>

        <div class="form-address">
            <div class="question">
                <p2>Qual o seu endereço?</p2>
            </div>

            <div class="answer">
                <input type="text" name="CEP" id="cep" placeholder="CEP" onblur="pesquisacep(this.value);" />
            </div>

            <div class="answer">
                <input type="text" name="ad_number" placeholder="Número da Casa ou Ap"/>
            </div>

            <div class="answer">
                <input type="text" name="street" id="street" placeholder="Rua"/>
            </div>

            <div class="answer">
                <input type="text" name="district" id="district" placeholder="Bairro"/>
            </div>

            <div class="answer">
                <input type="text" name="city" id="city" placeholder="Cidade"/>
            </div>

            <div class="answer">
                <input type="text" name="state" id="state" placeholder="Estado"/>
            </div>

        </div>

        </br>

        <input type="submit" id="btn-cadastro" class="btn-home" style="color: white; font-weight:800;" value="Cadastrar" name="enviar"><p></p></input>

    </form>

</html>
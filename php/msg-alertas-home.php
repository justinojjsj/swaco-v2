<!-- Colocar o session_start() na página que vai receber o conteúdo -->
<style>
    .alert{
        height: 50px;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-family: 'Bradley Hand', cursive;
        font-size: 20px;
        font-weight: 800;
        color: white;
        text-shadow: rgb(252, 244, 244) 0.1em 0.1em 0.8em;
        opacity: 0.7;
    }

    #msg-alert-sucesso{
        background-color: green;
    }

    #msg-alert-erro{
        background-color: red;
    }

    #msg-alert-cpf-invalido{
        background-color: rgb(255, 255, 135);
    }
</style>

<div id="msg-alert-sucesso" class="alert" role="alert" style="display:none;">
    Cadastro realizado com sucesso!
</div>

<div id="msg-alert-erro" class="alert" role="alert" style="display:none;">
    Cadastro não realizado!
</div>  

<div id="msg-alert-cpf-invalido" class="alert" role="alert" style="display:none;">
    CPF INVÁLIDO!
</div>   

<script>

    var secao = "<?php
        if(isset($_SESSION['msg2'])){
            echo $_SESSION['msg2'];
            unset($_SESSION['msg2']);
        }
    ?>" 

    var container_sucesso = document.querySelector('#msg-alert-sucesso');
    var container_erro = document.querySelector('#msg-alert-erro');
    var container_cpf_invalido = document.querySelector('#msg-alert-cpf-invalido');

    function exibir(info){
        if(info == "sucesso"){
            container_sucesso.style.display = 'block';  
        }else if(info == "erro"){
            container_erro.style.display = 'block';  
        }else if(info == "cpf_invalido"){
            container_cpf_invalido.style.display = 'block';  
        }
    }

    function apagar(info){
        container_sucesso.style.display = 'none';
        container_erro.style.display = 'none';
        container_cpf_invalido.style.display = 'none';
    }

    exibir(secao);
    setTimeout(apagar, 2500);
</script>
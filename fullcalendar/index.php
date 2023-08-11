<?php
  session_start();
?>

<!DOCTYPE html>
<html>

  <head>
    <?php include "./php/header.php"; ?>
    <script src='./js/cadastro.js'></script>
  </head>

  <body>

    <!-- ALERTAS SOBRE OS EVENTOS -->

    <div id="msg-alert-sucesso" class="alert alert-success" role="alert" style="display:none;">
        Operação realizada com sucesso!
    </div>

    <div id="msg-alert-erro" class="alert alert-danger" role="alert" style="display:none;">
        Operação não realizada!
    </div>   

    <script>

        var secao = "<?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>" 

        var container_sucesso = document.querySelector('#msg-alert-sucesso');
        var container_erro = document.querySelector('#msg-alert-erro');


        function exibir(info){
            if(info == "sucesso"){
                container_sucesso.style.display = 'block';  
            }else if(info == "erro"){
                container_erro.style.display = 'block';  
            }
        }

        function apagar(info){
            container_sucesso.style.display = 'none';
            container_erro.style.display = 'none';
        }

        exibir(secao);
        setTimeout(apagar, 2500);

    </script>

    <!-- FIM ALERTAS SOBRE OS EVENTOS -->

    <div id="calendar-menu">
      <div id="btn-return" class="btn-home"><a href="../php/index.php" style="text-decoration:none"><p>.</p></a></div> 
    </div>

    <div id='calendar'></div>

    <!-- INÍCIO DO VISUALIZAR E APAGAR EVENTO -->
    <div class="modal fade" id="visualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Detalhes da Consulta</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="visevent">
                  <dl class="row">
                    <dt class="col-sm-3">ID da Consulta</dt>
                    <dd class="col-sm-9" id="id"></dd>
                    
                    <dt class="col-sm-3">Título do Consulta</dt>
                    <dd class="col-sm-9" id="title"></dd>
                    
                    <dt class="col-sm-3">Início da Consulta</dt>
                    <dd class="col-sm-9" id="start"></dd>
                    
                    <dt class="col-sm-3">Fim da Consulta</dt>
                    <dd class="col-sm-9" id="end"></dd>
                    
                    <dt class="col-sm-3">Descrição</dt>
                    <dd class="col-sm-9" id="url"></dd>                    
                  </dl>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <a href="" id="apagar_evento" class="btn btn-danger">Apagar</a>
                    <button type="button" class="btn btn-warning btn-canc-vis">Editar</button>
                  </div>
              </div>
              
              <div class="formedit">
                  
                  <span id="msg-edit"></span>

                  <form id="editevent" method="POST" enctype="multipart/form-data" action="./php/edit_event.php">
                 
                    <input type="hidden" name="id" id="id">
                     
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Título</label>
                      <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="title" placeholder="Nome do paciente">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Color</label>
                      <div class="col-sm-10">
                        <select name="color" class="form-control" id="color">
                            <option value="">Selecione</option>			
                            <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                            <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                            <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                            <option style="color:#8B4513;" value="#8B4513">Marrom</option>	
                            <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                            <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                            <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                            <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                            <option style="color:#228B22;" value="#228B22">Verde</option>
                            <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Início</label>
                      <div class="col-sm-10">
                        <input type="text" name="start" class="form-control" id="start" maxlength="20" onkeypress="formatar_mascara(this,'##/##/#### ##:##:##')">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Fim</label>
                      <div class="col-sm-10">
                        <input type="text" name="end" class="form-control" id="end" maxlength="20" onkeypress="formatar_mascara(this,'##/##/#### ##:##:##')">
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descrição</label>
                        <textarea class="form-control" name="url" id="url" rows="3"></textarea>
                      </div>
                    </div>                    

                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary btn-canc-edit">Cancelar</button>
                       <!--BOTAO DO CADASTRO DE EDICAO DE EVENTO -->     
                       <button type="submit" name="CadEvent" id="CadEvent" value="CadEvent" class="btn btn-success">Cadastrar</button>                                   
                    </div>

                  </form>
                  
              </div>

          </div>


        </div>
      </div>
    </div>
    <!-- FIM DO VISUALIZAR E APAGAR EVENTO -->


    <!-- INÍCIO DO CADASTRAR EVENTO -->

    <div class="modal fade" id="cadastrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Consulta</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <span id="msg-cad"></span>

            <form id="addevent" method="POST" enctype="multipart/form-data" action="./php/cad_event.php">

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Paciente</label>
                <div class="col-sm-10">             
                  
									<select name="title" class="form-control">         
                      <?php                     
                          include("conexao.php");                     
                          $result_usuarios = "SELECT * FROM dados_paciente";
                          $resultado_usuario = mysqli_query($conn, $result_usuarios);                

                          while($row_usuarios = mysqli_fetch_assoc($resultado_usuario)){ ?>
                            <option value="<?php echo $row_usuarios['nome']; ?>"><?php echo $row_usuarios['nome'];?></option> <?php
                          }                            
                      ?>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Color</label>
                <div class="col-sm-10">
                  <select name="color" class="form-control" id="color">
                      <option value="">Selecione</option>			
                      <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                      <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                      <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                      <option style="color:#8B4513;" value="#8B4513">Marrom</option>	
                      <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                      <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                      <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                      <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                      <option style="color:#228B22;" value="#228B22">Verde</option>
                      <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Início</label>
                <div class="col-sm-10">
                  <input type="text" name="start" class="form-control" id="start" maxlength="20" onkeypress="formatar_mascara(this,'##/##/#### ##:##:##')">
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Fim</label>
                <div class="col-sm-10">
                  <input type="text" name="end" class="form-control" id="end" maxlength="20" onkeypress="formatar_mascara(this,'##/##/#### ##:##:##')">
                </div>
              </div>

              <div class="row mb-3">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descrição</label>
                    <textarea class="form-control" name="url" id="url" rows="3"></textarea>
                  </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                       
                <button type="submit" name="CadEvent" id="CadEvent" value="CadEvent" class="btn btn-success">Cadastrar</button>                                   
              </div>

            </form>
          </div>

        </div>
      </div>
    </div>

    <!-- FIM DO CADASTRAR EVENTO -->

  </body>

</html>
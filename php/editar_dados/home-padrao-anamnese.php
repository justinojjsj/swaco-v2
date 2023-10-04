<?php
	//session_start();
	error_reporting(0);
?>

<div id="tabela-dados">
	<table class="table table-striped table-dark table-bg">
		<thead>
			<tr>
			<th scope="col">#</th>
			<th scope="col">CPF</th>
			<th scope="col">Dados pessoais</th>
			<th scope="col">Anamnese</th>
			</tr>
		</thead>
		<tbody>
			<?php

				include_once('conexao.php');

				$anamnese = "SELECT * FROM dados_anamnese";
				$resultado_anamnese = mysqli_query($conn, $anamnese);

				while($row_anamnese = mysqli_fetch_assoc($resultado_anamnese)){
					$dados = "SELECT * FROM dados_paciente WHERE CPF=$row_anamnese[CPF]";
					$resultado_dados = mysqli_query($conn, $dados);
					$row_dados = mysqli_fetch_assoc($resultado_dados);

					if($row_anamnese['CPF'] != $row_dados['CPF']){
						//echo $row_anamnese['CPF'];
						//echo ' ';

						echo "<tr>";
						echo "<td>".$row_anamnese['id_pac']."</td>";
						echo "<td>".$row_anamnese['CPF']."</td>";
					
						echo 
						"<td> 							
							<a class='btn btn-sm btn-success' href='../cadastrar_dados/cadastro_paciente.php?CPF=$row_anamnese[CPF]'>
							<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus-square' viewBox='0 0 16 16'>
								<path d='M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'/>
								<path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/>
							</svg>
							</a>
						</td>";
						
						echo 
						"<td> 							
							<a class='btn btn-sm btn-warning' href='editar_anamnese.php?CPF=$row_anamnese[CPF]'>
								<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-clipboard-heart' viewBox='0 0 16 16'>
									<path fill-rule='evenodd' d='M5 1.5A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5v-1Zm5 0a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1Z'/>
									<path d='M3 1.5h1v1H3a1 1 0 0 0-1 1V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V3.5a1 1 0 0 0-1-1h-1v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2Z'/>
									<path d='M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.31 8 6.982Z'/>
								</svg>
							</a>

							<a class='btn btn-sm btn-danger' href='proc_apagar_anamnese.php?CPF=$row_anamnese[CPF]' data-confirm='Tem certeza de que deseja excluir a ficha de anamnese selecionada?'>
								<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
									<path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z'/>
									<path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z'/>
								</svg>
							</a>	
						</td>";					

						echo "</tr>";
					}
				}
			?>
		</tdoby>
	</table>

</div>


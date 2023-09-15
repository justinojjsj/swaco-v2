<?php
	session_start();
	include_once('conexao.php');
	$nome = filter_input(INPUT_GET, 'nome');
	$sql = "SELECT * FROM events WHERE title = '$nome' ORDER BY id ASC";
	$result = $conn->query($sql);
?>

<html>
	<head>

		<?php include "./header.php"; ?>
		<!-- BOTAO CALENDARIO -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    	<!--<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>-->
		<script src="./js/dataehora.js" type="text/javascript"></script>
   		<!--<link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />-->
		<link href="./css/dataehora.css" rel="stylesheet" type="text/css" />

		<!-- FIM BOTAO CALENDARIO -->

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
	</head>

	<body>
		</br></br></br>
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

			<a class="navbar-brand" href="#">CONSULTAS</a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a href="index.php" style="text-decoration:none; color:white;"><button type="button" class="btn btn-info" style='width:150px;'>Voltar</button></a>
					</li>

				</ul>

			</div>
		</nav>
			
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>

		<div id="tabela-dados">
			<table class="table table-striped table-dark table-bg">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">Nome</th>
				<th scope="col">Início</th>
				<th scope="col">Fim</th>
				<th scope="col">Descrição</th>
				<th scope="col">Alterar</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$contador = 0;
					while($user_data = mysqli_fetch_assoc($result)){
						$contador++;
						$data_inicio = date('d/m/Y H:i:s',strtotime($user_data['start']));
						$data_fim = date('d/m/Y H:i:s',strtotime($user_data['end']));
						
						echo "<tr>";
						echo "<td>".$contador."</td>";
						echo "<td>".$user_data['title']."</td>";
						echo "<td>".$data_inicio."</td>";
						echo "<td>".$data_fim."</td>";
						echo "<td>".$user_data['url']."</td>";
						echo 
						"<td> 
							<div style='height: 5px; background-color:#FFF !important; display:inline; '>
								
								<div id='input' style='z-index:100'></div>
								
							</div>
	
							<a class='btn btn-sm btn-danger' href='proc_apagar_usuario.php?id_pac=$user_data[title]' data-confirm='Tem certeza de que deseja excluir o usuário selecionado?'>
								<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
									<path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z'/>
									<path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z'/>
								</svg>
							</a>	
							
						</td>";
						echo "<td>".$user_data['url']."</td>";
						echo "</tr>";
					}
				?>
			</tdoby>
			</table>
		</div>

		<script>
       		$('#input').datetimepicker({ footer: true, modal: true });
    	</script>

	</body>
</html>
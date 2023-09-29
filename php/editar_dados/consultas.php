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

		<?php include "./msg-alertas.php"; ?>  
			
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
				<th scope="col">-</th>
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
							<a class='btn btn-sm btn-primary' href='editar_consulta.php?id_pac=$user_data[id]'>
								<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
									<path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
								</svg>
							</a>
	
							<a class='btn btn-sm btn-danger' href='proc_apagar_consulta.php?id_pac=$user_data[id]' data-confirm='Tem certeza de que deseja excluir o usuário selecionado?'>
								<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
									<path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z'/>
									<path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z'/>
								</svg>
							</a>	
							
						</td>";
						echo "</tr>";
					}
				?>
			</tdoby>
			</table>
		</div>

	</body>
</html>
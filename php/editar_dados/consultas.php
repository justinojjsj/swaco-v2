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
		</br></br></br>
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

			<a class="navbar-brand" href="#">CONSULTAS</a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
							<button type="button" class="btn btn-info" style='width:150px;'><a href="index.php" style="text-decoration:none; color:white;">Voltar</a></button>		
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
				<th scope="col">Cor</th>
				<th scope="col">Início</th>
				<th scope="col">Fim</th>
				<th scope="col">Descrição</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$contador = 0;
					while($user_data = mysqli_fetch_assoc($result)){
						$contador++;
						echo "<tr>";
						echo "<td>".$contador."</td>";
						echo "<td>".$user_data['title']."</td>";
						echo 
						"<td>
							<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-palette' viewBox='0 0 16 16' color='$user_data[color]'>
								<path d='M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z'/>
								<path d='M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8zm-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7z'/>
							</svg>
						</td>";
						echo "<td>".$user_data['start']."</td>";
						echo "<td>".$user_data['end']."</td>";
						echo "<td>".$user_data['url']."</td>";
						echo "</tr>";
					}
				?>
			</tdoby>
			</table>
		</div>
	</body>
</html>
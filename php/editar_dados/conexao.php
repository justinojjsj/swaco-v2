<?php
	$servidor = "171.18.0.3:3306";
	$usuario = "root";
	$senha = "my-secret-pw";
	$dbname = "projeto-db";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
?>
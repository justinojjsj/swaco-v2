<?php
	$servidor = "localhost:3306";
	$usuario = "hollu915_swaco";
	$senha = "my-secret-pw-swaco";
	$dbname = "hollu915_swaco";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}		
?>
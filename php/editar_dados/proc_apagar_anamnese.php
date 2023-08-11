<?php
session_start();
include_once("conexao.php");

$CPF = filter_input(INPUT_GET, 'CPF');
if(!empty($CPF)){
	$result_usuario = "DELETE FROM dados_anamnese WHERE CPF = '$CPF'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "sucesso_apagar";
		header("Location: index.php");
	}else{
		$_SESSION['msg'] = "erro_apagar";
		header("Location: index.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar uma ficha de anamnese!</p>";
	header("Location: index.php");
}
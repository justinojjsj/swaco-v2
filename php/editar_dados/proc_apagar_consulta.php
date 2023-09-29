<?php
	session_start();
	include_once("conexao.php");
	$id_pac = filter_input(INPUT_GET, 'id_pac', FILTER_SANITIZE_NUMBER_INT);

	$busca_nome = "SELECT title FROM events WHERE id = '$id_pac'";
	$nome = mysqli_query($conn, $busca_nome);
	
    $paciente = mysqli_fetch_assoc($nome);

	//echo $paciente['title']

	if(!empty($id_pac)){
		$result_usuario = "DELETE FROM events WHERE id='$id_pac'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		
		if(mysqli_affected_rows($conn)){
			$_SESSION['msg'] = "sucesso_apagar";
			header("Location: ./consultas.php?nome=$paciente[title]");
		}else{
			$_SESSION['msg'] = "erro_apagar";
			header("Location: index.php");
		}
	}else{	
		$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário!</p>";
		header("Location: index.php");	
	}
?>
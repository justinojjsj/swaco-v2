<?php
	session_start();
	include_once("conexao.php");
	$id_pac = filter_input(INPUT_GET, 'id_pac', FILTER_SANITIZE_NUMBER_INT);
	if(!empty($id_pac)){
		$result_usuario = "DELETE FROM dados_paciente WHERE id_pac='$id_pac'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if(mysqli_affected_rows($conn)){
			$_SESSION['msg'] = "sucesso_apagar";
			header("Location: index.php");
		}else{
			$_SESSION['msg'] = "erro_apagar";
			header("Location: index.php");
		}
	}else{	
		$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário!</p>";
		header("Location: index.php");
	}
?>
<?php 
	//session_start();
	include '../conexao.php';

	$nome 			 = $_POST['nome'];
	$celular 		 = $_POST['celular'];
	$idade 			 = $_POST['idade'];
	$cpf 			 = $_POST['CPF'];
	$estado_civil	 = $_POST['estado_civil'];
	$email 			 = $_POST['email'];
	$work 			 = $_POST['work'];
	$gender			 = $_POST['gender'];;
	$convenio		 = $_POST['convenio'];
	$CEP 			 = $_POST['CEP'];
	$ad_number		 = $_POST['ad_number'];
	$street 		 = $_POST['street'];
	$district		 = $_POST['district'];
	$city	    	 = $_POST['city'];
	$state		     = $_POST['state'];

	$sql = "INSERT INTO dados_paciente VALUES";
	$sql .= "(NULL,'$cpf','$nome','$celular','$idade','$estado_civil','$email','$work','$gender','$convenio','$CEP','$ad_number','$street','$district','$city','$state',NOW(),NULL)";

	if ($conn->query($sql) === TRUE) {
		$_SESSION['msg'] = $cpf;
		$_SESSION['msg2'] = "sucesso";
		include 'cadastro_anamnese.php';
	} else {
		$_SESSION['msg2'] = "erro";
	}
	
	$conn->close();
?>
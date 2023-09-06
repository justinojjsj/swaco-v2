<?php 
	session_start();
	error_reporting(0);

	include '../conexao.php';

	$problem 		 = $_POST['problem'];
	$cpf 		 	 = $_POST['CPF'];
	$visit 			 = $_POST['visit'];
	$medical 		 = $_POST['medical'];
	$allergies	 	 = $_POST['allergies'];
	$allergies_desc	 = $_POST['allergies_desc']; 
	$heart 			 = $_POST['heart'];
	$heart_desc		 = $_POST['heart_desc'];
	$benz			 = $_POST['benz'];
	$benz_problem	 = $_POST['benz_problem'];
	$dipirona		 = $_POST['dipirona'];
	$dip_problem	 = $_POST['dip_problem'];
	$pressure		 = $_POST['pressure'];
	$press_med    	 = $_POST['press_med'];
	$press_medicine  = $_POST['press_medicine'];
	$renal			 = $_POST['renal'];
	$renal_problem	 = $_POST['renal_problem'];
	$diabete 		 = $_POST['diabete'];
	$hepatite 		 = $_POST['hepatite'];
	$anest 		 	 = $_POST['anest'];
	$anest_problem	 = $_POST['anest_problem'];
	$protese 		 = $_POST['protese'];
	$marcap 		 = $_POST['marcap'];
	$transf 		 = $_POST['transf'];
	$droga	 		 = $_POST['droga'];
	$fuma 			 = $_POST['fuma'];
	$gravida 		 = $_POST['gravida'];
	$escovacao 		 = $_POST['escovacao'];
	$fio_dental		 = $_POST['fio_dental'];

	//NAO ESTAFUNCIONANDO O RECEVIMETNO DESSA VARIAVEL QUE VEM DO VERIFICA_CADASTRO_ANAMNESE
	if(isset($_SESSION['cadastrar_pac'])){		
		$cadastrar_pac 	 = $_SESSION['cadastrar_pac'];
		echo $cadastrar_pac;
		unset($_SESSION['cadastrar_pac']);
	}
	
	
	$sql = "INSERT INTO dados_anamnese VALUES";
	$sql .= "(NULL,'$cpf','$problem','$visit','$medical','$allergies','$allergies_desc','$heart','$heart_desc','$benz','$benz_problem','$dipirona','$dip_problem','$pressure','$press_med','$press_medicine','$renal','$renal_problem','$diabete','$hepatite','$anest','$anest_problem','$protese','$marcap','$transf','$droga','$fuma','$gravida','$escovacao','$fio_dental',NOW(),NULL)";	


	if($cadastrar_pac == 0){		
		
		if ($conn->query($sql) === TRUE) {
			//echo "DADOS DE ANAMNESE CADASTRADO EM USUARIO EXISTENTE";
			$_SESSION['msg2'] = "sucesso";
			header("Location: ../index.php");	
		} else {
			$_SESSION['msg2'] = "erro";
		}
		
	}else{

		if ($conn->query($sql) === TRUE) {
			//echo "DADOS DE ANAMNESE CADASTRADO MAS USUÁRIO NAO EXISTE";
			$_SESSION['msg2'] = "cpf_nop";
			include 'cadastro_dados.php';
		} else {
			$_SESSION['msg2'] = "erro";
		}
	}
		
	$conn->close();
	
?>
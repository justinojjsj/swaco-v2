<?php 
	session_start();
	error_reporting(0);

	include 'conexao.php';

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

	function validaCPF($cpf) {
		// Verifica se o número foi informado
		if(empty($cpf)) {
			return "O CPF é obrigatório";
		}
	 
		// Elimina possível máscara
		$cpf = preg_replace('/[^0-9]/', '', $cpf);
		$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
		 
		// Verifica se o número de dígitos informados é igual a 11
		if (strlen($cpf) != 11) {
			return "O CPF deve conter 11 dígitos";
		}
		// Verifica se nenhuma das sequências inválidas abaixo
		// foi digitada. Caso afirmativo, retorna falso
		else if ($cpf == '00000000000' || 
			$cpf == '11111111111' || 
			$cpf == '22222222222' || 
			$cpf == '33333333333' || 
			$cpf == '44444444444' || 
			$cpf == '55555555555' || 
			$cpf == '66666666666' || 
			$cpf == '77777777777' || 
			$cpf == '88888888888' || 
			$cpf == '99999999999') {
			return "CPF inválido";
		 // Calcula os dígitos verificadores para verificar se o
		 // CPF é válido
		 } else {   
			 
			for ($t = 9; $t < 11; $t++) {
				 
				for ($d = 0, $c = 0; $c < $t; $c++) {
					$d += $cpf[$c] * (($t + 1) - $c);
				}
				$d = ((10 * $d) % 11) % 10;
				if ($cpf[$c] != $d) {
					//return "CPF inválido";
					return 0;
				}
			}
	 
			//return "CPF válido";
			return 1;
		}
	}
	
//	echo validaCPF($cpf);

	if (validaCPF($cpf)==1){
		//echo "VALIDO";

		$sql = "INSERT INTO dados_anamnese VALUES";
		$sql .= "(NULL,'$cpf','$problem','$visit','$medical','$allergies','$allergies_desc','$heart','$heart_desc','$benz','$benz_problem','$dipirona','$dip_problem','$pressure','$press_med','$press_medicine','$renal','$renal_problem','$diabete','$hepatite','$anest','$anest_problem','$protese','$marcap','$transf','$droga','$fuma','$gravida','$escovacao','$fio_dental',NOW(),NULL)";
		
		if ($conn->query($sql) === TRUE) {
			$_SESSION['msg2'] = "sucesso";
			header("Location: index.php");	
		} else {
			$_SESSION['msg2'] = "erro";
		}

	}else{
		//echo "INVALIDO";
		$_SESSION['msg2'] = "cpf_invalido";
		header("Location: anamnese-form2.php");
	}

	/*
	$sql = "INSERT INTO dados_anamnese VALUES";
	$sql .= "(NULL,'$cpf','$problem','$visit','$medical','$allergies','$allergies_desc','$heart','$heart_desc','$benz','$benz_problem','$dipirona','$dip_problem','$pressure','$press_med','$press_medicine','$renal','$renal_problem','$diabete','$hepatite','$anest','$anest_problem','$protese','$marcap','$transf','$droga','$fuma','$gravida','$escovacao','$fio_dental',NOW(),NULL)";
	
	if ($conn->query($sql) === TRUE) {
		$_SESSION['msg2'] = "sucesso";
		header("Location: index.php");	
	} else {
		$_SESSION['msg2'] = "erro";
	}
	*/
	
	$conn->close();

?>
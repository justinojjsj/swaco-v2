<?php 
	session_start();
	include 'conexao.php';

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

		$sql = "INSERT INTO dados_paciente VALUES";
		$sql .= "(NULL,'$cpf','$nome','$celular','$idade','$estado_civil','$email','$work','$gender','$convenio','$CEP','$ad_number','$street','$district','$city','$state',NOW(),NULL)";

		if ($conn->query($sql) === TRUE) {
			$_SESSION['msg'] = $cpf;
			$_SESSION['msg2'] = "sucesso";
			header("Location: anamnese-form2.php");	
		} else {
			$_SESSION['msg2'] = "erro";
		}

	}else{
		//echo "INVALIDO";
		$_SESSION['msg2'] = "cpf_invalido";
		header("Location: index.php");
	}	
	$conn->close();
?>
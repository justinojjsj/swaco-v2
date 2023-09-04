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
	$erro			 = 0;

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
			//return "CPF inválido";
			return 1;
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
					return 1;
				}
			}
	 
			//return "CPF válido";
			return 0;
		}
	}
	
//	echo validaCPF($cpf);

	if (validaCPF($cpf)==0){
		//echo "VALIDO";

		//echo $cpf;

		$result_user = "SELECT * FROM dados_paciente WHERE CPF='$cpf'";		
		$resultado_user = mysqli_query($conn, $result_user);
		//echo mysqli_affected_rows($conn);
		
		if(mysqli_affected_rows($conn)==1){
			//echo "cpf valido e encontrado no banco de dados tabela dados_paciente";
			$_SESSION['cadastrar_pac'] = "0";
		}elseif(mysqli_affected_rows($conn)==0){
			//echo "cpf valido, mas usuario nao encontrado na tabela dados_paciente";
			$_SESSION['cadastrar_pac'] = "1";	
		}else{
			//echo "usuario já existe, vc será direcionado para edição de anamnese"
			$CPF = $cpf;
			$_SESSION['CPF'] = $CPF;
			//echo $_SESSION['CPF'];
			include '../editar_dados/editar_anamnese.php';
		}
		
		//echo "\n\n verifica cadastro =".$_SESSION['cadastrar_pac'];
		include 'processa_cadastro_anamnese.php';
	}else{
		//echo "INVALIDO";
		$_SESSION['msg2'] = "cpf_invalido";
		include 'cadastro_anamnese.php';
	}	
	
	$conn->close();	
?>
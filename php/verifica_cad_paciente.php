<?php 

	$nome 			 = $_POST['nome'];
	$celular 		 = $_POST['celular'];
	$idade 			 = $_POST['idade'];
	$CPF 			 = $_POST['CPF'];
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
	$erro 			 = 0;


	//CODIGOS DE VERIFICAÇÃO DESATIVADO POR QUESTOES DE TEMPO DE ENTREGA DO PROJETO

	//Verifica se o campo nome não está em branco
	/*
	if (empty($nome) OR strstr($nome, ' ')==false) {
		echo "Favor digitar o seu nome corretamente.<br>";
		$erro = 1;
	}
	*/

	//Verifica se o campo email está preenchido corretamente
	/*
	if (strlen($email)< 8 || strstr($email, '@')==false) {
		echo "Favor digitar o seu email corretamente.<br>";
		$erro = 1;
	}
	*/

	//Verifica se o campo cidade está em branco
	/*
	if (empty($city)) {
		echo "Favor digitar sua cidade.<br>";
		$erro = 1;
	}
	*/
	/*
	//Verifica se o campo estado está preenchido com 2 digitos
	if (strlen($state)!=2) {
		echo "Favor digitar o seu estado corretamente.<br>";
		$erro = 1;
	}
	*/
	//Verifica se não houve erro - neste caso chama a include para inserir os dados

	if ($erro == 0) {
		include 'cadastro_paciente.php';
	}
 ?>
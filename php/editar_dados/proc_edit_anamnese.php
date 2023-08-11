<?php
session_start();
include_once("conexao.php");

$id_anamnese = filter_input(INPUT_POST, 'id_anamnese', FILTER_SANITIZE_NUMBER_INT);
$CPF = filter_input(INPUT_POST, 'CPF');
$problem = filter_input(INPUT_POST, 'problem');
$visit = filter_input(INPUT_POST, 'visit');
$medical = filter_input(INPUT_POST, 'medical');
$allergies = filter_input(INPUT_POST, 'allergies');
$allergies_desc = filter_input(INPUT_POST, 'allergies_desc');
$heart = filter_input(INPUT_POST, 'heart');
$heart_desc = filter_input(INPUT_POST, 'heart_desc');
$benz = filter_input(INPUT_POST, 'benz');
$benz_problem = filter_input(INPUT_POST, 'benz_problem');
$dipirona = filter_input(INPUT_POST, 'dipirona');
$dip_problem = filter_input(INPUT_POST, 'dip_problem');
$pressure = filter_input(INPUT_POST, 'pressure');
$press_med = filter_input(INPUT_POST, 'press_med');
$press_medicine = filter_input(INPUT_POST, 'press_medicine');
$renal = filter_input(INPUT_POST, 'renal');
$renal_problem = filter_input(INPUT_POST, 'renal_problem');
$diabete = filter_input(INPUT_POST, 'diabete');
$hepatite = filter_input(INPUT_POST, 'hepatite');
$anest = filter_input(INPUT_POST, 'anest');
$anest_problem = filter_input(INPUT_POST, 'anest_problem');
$protese = filter_input(INPUT_POST, 'protese');
$marcap = filter_input(INPUT_POST, 'marcap');
$transf = filter_input(INPUT_POST, 'transf');
$droga = filter_input(INPUT_POST, 'droga');
$fuma = filter_input(INPUT_POST, 'fuma');
$gravida = filter_input(INPUT_POST, 'gravida');
$escovacao = filter_input(INPUT_POST, 'escovacao');
$fio_dental = filter_input(INPUT_POST, 'fio_dental');

//echo "Id: $id_pac <br>";
//echo "Nome: $nome <br>";
//echo "Celular: $celular <br>";
//echo "Idade: $idade <br>";

$result_usuario = "UPDATE dados_anamnese SET id_anamnese ='$id_anamnese ', problem='$problem', visit='$visit', medical='$medical', allergies='$allergies', allergies_desc='$allergies_desc', heart='$heart', heart_desc='$heart_desc', benz='$benz', benz_problem='$benz_problem', dipirona='$dipirona', dip_problem='$dip_problem', pressure='$pressure', press_med='$press_med', press_medicine='$press_medicine', renal='$renal', renal_problem='$renal_problem', diabete='$diabete', hepatite='$hepatite', anest='$anest', anest_problem='$anest_problem', protese='$protese', marcap='$marcap', transf='$transf', droga='$droga', fuma='$fuma', gravida='$gravida', escovacao='$escovacao', fio_dental='$fio_dental', modificado=NOW() WHERE CPF='$CPF'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "sucesso";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "erro";
	header("Location: index.php");
	//header("Location: editar_usuario.php?id_pac=$id_pac");
}

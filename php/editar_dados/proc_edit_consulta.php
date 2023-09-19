<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
//$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$title = filter_input(INPUT_POST, 'title');
$start = filter_input(INPUT_POST, 'start');
$end = filter_input(INPUT_POST, 'end');
$url = filter_input(INPUT_POST, 'url');

$data_start = str_replace('/', '-', $start);
$data_start_conv = date("Y-m-d H:i:s", strtotime($data_start));

$data_end = str_replace('/', '-', $end);
$data_end_conv = date("Y-m-d H:i:s", strtotime($data_end));

//echo "Id: $id_pac <br>";
//echo "Nome: $nome <br>";
//echo "Celular: $celular <br>";
//echo "Idade: $idade <br>";

$result_usuario = "UPDATE events SET title='$title', start='$data_start_conv', end='$data_end_conv', url='$url', modificado=NOW() WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "sucesso";
	header("Location: ./consultas.php?nome=$title");		
}else{
	$_SESSION['msg'] = "erro";
	header("Location: index.php");
	//header("Location: editar_usuario.php?id_pac=$id_pac");
}
